<?php

use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectors = [
            'Centre',
            'Nord-Ouest',
            'Nord-Est',
            'Sud-Ouest',
            'Sud-Est',
            'DTOM Caraibes-Ameriques',
            'DTOM Asie-Afrique'
        ];
        foreach ($sectors as $sector) {
            \App\Sector::create(['name' => $sector]);
        }
    }
}
