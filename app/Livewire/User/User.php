<?php

namespace App\Livewire\User;

use App\Models\User as ModelsUser;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\File;

class User extends Component
{
    public $delete_id, $oldImage;
    protected $listeners = ['deleteConfirm' => 'deleteStudent'];
    public function render()
    {
        $users = ModelsUser::where('role', 1)->paginate();
        return view('livewire.user.user', compact('users'));
    }

    public function status($id) {
        $user = ModelsUser::where('id', $id)->first();

        if($user->status == 0){
            $user->update([
                'status' => '1',
                'updated_at' => Carbon::now()
            ]);
        }else{
            $user->update([
                'status' => '0',
                'updated_at' => Carbon::now()
            ]);
        }
    }

    public function deleteAlert($id){
        $this->delete_id = $id;
        $data = ModelsUser::findOrFail($this->delete_id);
        $this->oldImage = $data->profile;
        $this->dispatch('confirmDeleteAlert');
    }
    public function deleteStudent(){
        $done = ModelsUser::findOrFail($this->delete_id)->delete();
        if($done){
            $image_path = public_path('storage\\' . $this->oldImage);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $this->dispatch('deleteSuccessFull', [
                'title' => 'Data Deleted Successfull',
                'type' => "success",
            ]);
        }
    }
}
