<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_patient = new Role();
      $role_patient->name = 'patient';
      $role_patient->description = 'A Patient User';
      $role_patient->save();

      $role_manager = new Role();
      $role_manager->name = 'doctor';
      $role_manager->description = 'A Doctor User';
      $role_manager->save();
    }
}
