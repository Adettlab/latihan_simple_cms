<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new user();
        $user -> name = 'aditya eka';
        $user -> email = 'aditya@gmail.com';
        $user -> password = 'admin';
        $user->save();

    }
}


