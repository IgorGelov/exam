<?php

use Illuminate\Database\Seeder;

class ViewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 4; $i++) {
            $view = new \App\View();
            $doctor = \App\Doctor::find(rand(1, 3));
            $patient = \App\Patient::find(rand(1, 3));

            $view->setUser($doctor);
            $view->setTask($patient);
            $view->date = 'date';

            $view->save();
        }
    }
}