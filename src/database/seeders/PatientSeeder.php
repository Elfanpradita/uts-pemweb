<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::create([
            'name' => 'Ahmad Fauzi',
            'date_of_birth' => '1990-05-10',
            'gender' => 'L',
            'phone' => '081234567890',
            'address' => 'Jl. Merdeka No. 10, Jakarta',
            'allergy' => 'Debu',
        ]);
    }
}
