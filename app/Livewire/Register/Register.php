<?php

namespace App\Livewire\Register;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $Cpassword;
    public function render()
    {
        return view('livewire.register.register');
    }

    public function insert(){

        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|same:Cpassword',
        ]);

        $done = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 1,
            'created_at' => Carbon::now(),
        ]);


        if($done){

            $this->reset();
            $this->dispatch('swal', [
                'title' => 'User Added',
                'type' => "success",
            ]);
        }
    }
}
