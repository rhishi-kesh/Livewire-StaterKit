<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class SystemInformation extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('system_information')->insert([
            'number' => '01629005842',
            'email' => 'reshikash300@gmail.com',
            'logo' => 'about/logo/logo.png',
            'fav' => 'about/fav/fav.jpg',
            'location' => 'Mirpur 10, Dhaka',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        File::copy(
            public_path('fav.jpg'),
            Storage::path('public/about/fav/fav.jpg')
        );
        File::copy(
            public_path('logo.png'),
            Storage::path('public/about/logo/logo.png')
        );
    }
}
