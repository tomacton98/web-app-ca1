<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_patient = Role::where('name', 'patient')->first();
      $role_doctor  = Role::where('name', 'doctor')->first();

      $patient = new User();
      $patient->name = 'Patient Name';
      $patient->email = 'patient@example.com';
      $patient->password = bcrypt('secret');
      $patient->save();
      $patient->roles()->attach($role_patient);

      $doctor = new User();
      $doctor->name = 'Doctor Name';
      $doctor->email = 'doctor@example.com';
      $doctor->password = bcrypt('secret');
      $doctor->save();
      $doctor->roles()->attach($role_doctor);
    }
}
