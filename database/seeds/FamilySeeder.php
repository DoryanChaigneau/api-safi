<?php

use Illuminate\Database\Seeder;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $families = [
            'Antalgiques en association',
            'Antalgiques antipyréques en association',
            'Antidépresseur d\'action centrale',
            'Antivertigineux antihistaminique H1',
            'Antibiotique antituberculeux',
            'Antibiotique antiacnéique local',
            'Antibiotique de la famille des béta-lactamines',
            'Antibiotique de la famille des cyclines',
            'Antibiotique de l famille des macrolides',
            'Antihistaminique H1 local',
            'Antidépresseur imipraminique tricyclique',
            'Antidépresseur inhibiteur sélectif de la recapture de la sétonine',
            'Antibiotique local ORL',
            'Antidépresseur IMAO non sélectif',
            'Antibiotique ophtalmique',
            'Antipsychotique normothymique',
            'Antibiotique urinaire minute',
            'Corticoide, antibiotique et antifongique à usage local',
            'Hypnotique antihistaminique',
            'Psychostimulant antiasthésique'
        ];

        foreach ($families as $family) {
            \App\Family::create(['name' => $family]);
        }
    }
}
