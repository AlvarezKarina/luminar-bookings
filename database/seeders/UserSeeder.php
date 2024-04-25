<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User();

        $user->name="Sebastián Alejandro";
        $user->email=" sebastianalejandro.castroramirez23@gmail.com";
        $user->password="seba2000";

        $user->save();
    }
}
