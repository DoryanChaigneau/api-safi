<?php

use Illuminate\Database\Seeder;

class EmployeeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\EmployeeType::create(['name' => 'Visiteur médical']);
        \App\EmployeeType::create(['name' => 'Délégué régional']);
        \App\EmployeeType::create(['name' => 'Responsable secteur']);
    }
}
