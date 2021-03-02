<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SectorSeeder::class,
            DistrictSeeder::class,
            EmployeeTypeSeeder::class,
            VisitStateSeeder::class,
            PractitionerSeeder::class,
            FamilySeeder::class,
            MedicineSeeder::class,
            EmployeeSeeder::class,
            ComplementaryActivitySeeder::class
        ]);
    }
}
