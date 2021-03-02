<?php

use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
            ['name' => 'Ile de France', 'sector_id' => 1],
            ['name' => 'Centre Val de Loire', 'sector_id' => 1],
            ['name' => 'Bretagne', 'sector_id' => 2],
            ['name' => 'Pays de la Loire', 'sector_id' => 2],
            ['name' => 'Normandie', 'sector_id' => 2],
            ['name' => 'Hauts de France', 'sector_id' => 3],
            ['name' => 'Grand Est', 'sector_id' => 3],
            ['name' => 'Bourgogne Franche Comté', 'sector_id' => 3],
            ['name' => 'Nouvelle Aquitaine', 'sector_id' => 4],
            ['name' => 'Occitanie', 'sector_id' => 4],
            ['name' => 'Auvergne Rhone Alpes', 'sector_id' => 5],
            ['name' => 'Provence Alpes Cote d\'Azur', 'sector_id' => 5],
            ['name' => 'Corse', 'sector_id' => 5],
            ['name' => 'Mayotte', 'sector_id' => 6],
            ['name' => 'La Réunion', 'sector_id' => 6],
            ['name' => 'Guyane', 'sector_id' => 7],
            ['name' => 'Guadeloupe', 'sector_id' => 7],
            ['name' => 'Martinique', 'sector_id' => 7],
        ];

        foreach ($districts as $district) {
            \App\District::create(['name' => $district['name'], 'sector_id' => $district['sector_id']]);
        }
    }
}
