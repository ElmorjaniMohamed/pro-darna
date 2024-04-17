<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Property;
use App\Models\PropertyAmenity;
use Carbon\Carbon;

class AmenityPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = Property::all();
        $amenities = PropertyAmenity::all();

        foreach ($properties as $property) {
            foreach ($amenities as $amenity) {
                DB::table('amenity_property')->insert([
                    'property_id' => $property->id,
                    'amenity_id' => $amenity->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}