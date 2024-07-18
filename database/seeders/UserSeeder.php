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
                'name' => 'Suparyanto',
                'phone_number' => '081212341234',
                'email' => 'admin1@gmail.com',
                'address' => 'Desa Wirun, Kec.Kutoarjo, Kab.Purworejo',
                'password' => bcrypt('123456'),
                'gender' => 'male',
                'role' => 'admin',
                'vehicle_brand' => 'Suzuki',
                'vehicle_type' => 'APV',
                'license_plate' => 'AA 1 WW'
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
