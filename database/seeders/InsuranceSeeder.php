<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InsuranceSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('insurances_plans')->insert([
            [
                'name' => 'Silver Plan',
                'description' => 'Overseas Hospitalization:Lorem ipsum dolor sit amet consectetur.Delayed Baggage:Lorem ipsum dolor sit amet consectetur.Emergency Hotel Extension:Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.',
                'image' => 'insup1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gold Plan',
                'description' => 'Overseas Hospitalization:Lorem ipsum dolor sit amet consectetur.Delayed Baggage:Lorem ipsum dolor sit amet consectetur.Emergency Hotel Extension:Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.',
                'image' => 'insur3.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Diamond Plan',
                'description' => 'Overseas Hospitalization:Lorem ipsum dolor sit amet consectetur.Delayed Baggage:Lorem ipsum dolor sit amet consectetur.Emergency Hotel Extension:Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.',
                'image' => 'insup2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
