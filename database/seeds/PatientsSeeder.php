<?php

use Illuminate\Database\Seeder;

class PatientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 4; $i++) {
            $patient = new \App\Patient();
            $patient->name = 'Name' . $i;
            $patient->surname = 'Surname' . $i;
            $patient->email = 'Embg_Patient' . $i;
            
            $doctor = \App\Doctor::find(rand(1, 3));
            $patient->setDoctor($doctor);

            $patient->save();
        }
    }
}