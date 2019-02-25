<?php

use Illuminate\Database\Seeder;

class StructBTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<10; $i++) {

            DB::table('structB')->insert([
                'field_1' => str_random(5),
            ]);
        }
    }
}
