<?php

use Illuminate\Database\Seeder;

class VisitStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = ['Programmée', 'Annulée'];
        foreach ($states as $state) {
            \App\VisitState::create(['name' => $state]);
        }
    }
}
