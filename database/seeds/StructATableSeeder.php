<?php

use Illuminate\Database\Seeder;

class StructATableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<50; $i++) {

            DB::table('structA')->insert([
                'name' => str_random(10),
                'onwer_id' => random_int(1, 10),
            ]);
        }
    }
}
