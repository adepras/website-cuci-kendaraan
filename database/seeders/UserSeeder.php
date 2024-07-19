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
                'password' => bcrypt('12345'),
                'gender' => 'male',
                'role' => 'user',
                'vehicle_brand' => 'Toyota',
                'vehicle_type' => 'GR Corolla',
                'license_plate' => 'D 3 PRAS'
            ],
            [
                'name' => 'Azyumi Azra',
                'phone_number' => '081212341234',
                'email' => 'admin1@gmail.com',
                'address' => 'Kab.Kudus',
                'password' => bcrypt('123456'),
                'gender' => 'female',
                'role' => 'admin',
                'vehicle_brand' => 'Suzuki',
                'vehicle_type' => 'Ertiga',
                'license_plate' => 'K 111 M'
            ],
            // [
            //     'name' => '',
            //     'phone_number' => '',
            //     'email' => '',
            //     'address' => '',
            //     'password' => bcrypt(''),
            //     'gender' => '',
            //     'role' => '',
            //     'vehicle_brand' => '',
            //     'vehicle_type' => '',
            //     'license_plate' => ''
            // ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
