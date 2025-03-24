<?php

namespace Database\Seeders;

use App\Models\Planet;
use App\Models\SolarSystem;
use Illuminate\Database\Seeder;

class PlanetSeeder extends Seeder
{
    public function run(): void
    {
        $solarSystem = SolarSystem::create([
            'name' => 'Solar System',
            'galaxy' => 'Milky Way',
        ]);

        $alphaSystem = SolarSystem::create([
            'name' => 'Alpha Centauri',
            'galaxy' => 'Milky Way',
        ]);

        Planet::create([
            'name' => 'Earth',
            'description' => 'Our home planet, the third planet from the Sun.',
            'size_in_km' => 12742,
            'solar_system_id' => $solarSystem->id,
        ]);

        Planet::create([
            'name' => 'Mars',
            'description' => 'The fourth planet from the Sun, often called the Red Planet.',
            'size_in_km' => 6779,
            'solar_system_id' => $solarSystem->id,
        ]);

        Planet::create([
            'name' => 'Jupiter',
            'description' => 'The largest planet in our Solar System.',
            'size_in_km' => 139820,
            'solar_system_id' => $solarSystem->id,
        ]);

        Planet::create([
            'name' => 'Venus',
            'description' => 'The second planet from the Sun, known for its thick atmosphere.',
            'size_in_km' => 12104,
            'solar_system_id' => $solarSystem->id,
        ]);

        Planet::create([
            'name' => 'Saturn',
            'description' => 'The sixth planet from the Sun, famous for its rings.',
            'size_in_km' => 116460,
            'solar_system_id' => $solarSystem->id,
        ]);

        Planet::create([
            'name' => 'Proxima b',
            'description' => 'An exoplanet orbiting Proxima Centauri.',
            'size_in_km' => 12000,
            'solar_system_id' => $alphaSystem->id,
        ]);
    }
}