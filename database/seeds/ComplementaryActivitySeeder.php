<?php

use Illuminate\Database\Seeder;

class ComplementaryActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ComplementaryActivities::class, 50)->create()->each(
            function($ca) {
                factory(\App\Invite::class, mt_rand(5, 30))->create(['complementary_activity_id' => $ca->id]);
            }
        );
    }
}
