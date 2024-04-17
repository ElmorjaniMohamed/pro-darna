<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PropertyAmenity; 

class PropertyAmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amenities = [
            'Air Conditioning',
            'Bedding',
            'Balcony',
            'Cable TV',
            'Oven',
            'Internet',
            'Parking',
            'Lift',
            'Pool',
            'Dishwasher',
            'Washing Machine',
            'Toaster',
        ];

        foreach ($amenities as $amenity) {
            PropertyAmenity::create(['name' => $amenity]);
        }
    }
}