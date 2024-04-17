<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PropertyType;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $propertyTypes = [
            'Single-family home',
            'Condominium',
            'Townhouse',
            'Bungalow',
            'Cottage',
            'Loft',
            'Ranch',
            'Farmhouse',
            'Mansion',
            'Studio apartment',
        ];

        foreach ($propertyTypes as $type) {
            PropertyType::create(['name' => $type]);
        }
    }
}