<?php

use Illuminate\Database\Seeder;

class DoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 4; $i++) {
            $doctor = new \App\Doctor();
            $doctor->name = 'Name' . $i;
            $doctor->surname = 'Surname' . $i;
            $doctor->embg = 'Embg' . $i;
            $doctor->licence_number = 'Licence_number' . $i;

            $doctor->save();
        }
    }
}