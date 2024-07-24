<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonianls')->insert([
            ['nama' => 'Bambang', 'quote' => 'Layanan iWash sangat memuaskan!'],
            ['nama' => 'Yanto', 'quote' => 'Proses cepat dan hasil cucian bersih.']
        ]);
    }
}
