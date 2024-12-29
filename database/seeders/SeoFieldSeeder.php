<?php

namespace Database\Seeders;

use App\Models\SeoField;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeoField::factory()->count(1)->create();
    }
}
