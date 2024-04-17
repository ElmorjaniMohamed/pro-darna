<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agency;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agencies = [
            [
                'name' => 'Agency 1',
                'description' => 'Description for Agency 1',
                'address' => '123 Street, City, State, Country',
                'zipCode' => 12345,
                'phone' => '123-456-7890',
                'email' => 'agency1@example.com',
                'number_of_agent' => 10,
                'webSite' => 'http://www.agency1.com',
            ],
            // Add more agencies as needed...
        ];

        foreach ($agencies as $agency) {
            Agency::create($agency);
        }
    }
}