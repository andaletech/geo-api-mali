<?php

use Illuminate\Database\Seeder;
use App\Models\LocationType;

class LocationTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $district = LocationType::where('name', 'district')->first();
        if (empty($district)) {
            $district = new LocationType(
                [
                    'name' => 'district',
                ]
            );
            $district->save();
        }

        $region = LocationType::where('name', 'region')->first();
        if (empty($region)) {
            $region = new LocationType(
                [
                    'name' => 'region',
                ]
            );
            $region->save();
        }

        $cercle = LocationType::where('name', 'cercle')->first();
        if (empty($cercle)) {
            $cercle = new LocationType(
                [
                    'name' => 'cercle',
                ]
            );
            $cercle->save();
        }
        
        $commune = LocationType::where('name', 'commune')->first();
        if (empty($commune)) {
            $commune = new LocationType(
                [
                    'name' => 'commune',
                ]
            );
            $commune->save();
        }
        
        $quartier = LocationType::where('name', 'quartier')->first();
        if (empty($quartier)) {
            $quartier = new LocationType(
                [
                    'name' => 'quartier',
                ]
            );
            $quartier->save();
        }
    }
}
