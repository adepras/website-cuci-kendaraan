<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Ade Prasetyo',
                'phone_number' => '081212341234',
                'email' => 'user1@gmail.com',
                'address' => 'Kec.Kutoarjo, Kab.Purworejo',
                'password' => bcrypt('akunuser1'),
                'gender' => 'male',
                'role' => 'user'
            ],
            [
                'name' => 'Azyumi Azra',
                'phone_number' => '081212341234',
                'email' => 'admin1@gmail.com',
                'address' => 'Kab.Kudus',
                'password' => bcrypt('akunadmin1'),
                'gender' => 'female',
                'role' => 'admin'
            ],
            // [
            //     'name' => 'Admin Iwash',
            //     'phone_number' => '081219999204',
            //     'email' => 'iwashadmin@gmail.com',
            //     'address' => 'Desa Wirun, Kec.Kutoarjo, Kab.Purworejo, Jawa Tengah',
            //     'password' => bcrypt('adminiwash1234'),
            //     'gender' => 'male',
            //     'role' => 'admin'
            // ],
            // [
            //     'name' => '',
            //     'phone_number' => '',
            //     'email' => '',
            //     'address' => '',
            //     'password' => bcrypt(''),
            //     'gender' => '',
            //     'role' => ''
            // ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
