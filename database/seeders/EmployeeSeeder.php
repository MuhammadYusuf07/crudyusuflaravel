<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       \DB::table('employees')->insert([
        'nama' => 'Muhammad Yusuf',
        'jeniskelamin' => 'cowo',
        'notelpon' => '081221504743',
       ]); 
    }
}
