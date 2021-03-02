<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Employee::class, 252)->create()->each(
            function ($employee) {
                factory(\App\Visit::class, 40)->create(['employee_id' => $employee->id])->each(
                    function($visit) {
                        factory(\App\VisitOffer::class, 4)->create(['visit_id' => $visit->id]);
                        factory(\App\VisitReport::class, 1)->create(['visit_id' => $visit->id]);
                    }
                );
            }
        );
    }
}
