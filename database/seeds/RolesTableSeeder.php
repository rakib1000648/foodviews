<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new Role();
      $user->name = 'SystemAdmin';
      $user->description = 'Super admin has full power to this system';
      $user->save();

      $user = new Role();
      $user->name = 'CompanyAdmin';
      $user->description = 'Co-Admin has power to service of his company';
      $user->save();

      $user = new Role();
      $user->name = 'CompanyManager';
      $user->description = 'Manager has power to service management';
      $user->save();

      $user = new Role();
      $user->name = 'CompanyAccountant';
      $user->description = 'Accountant can take order and bill from customer';
      $user->save();

      $user = new Role();
      $user->name = 'Customer';
      $user->description = 'Customer has access to view and provide feedback on public pages';
      $user->save();
    }
}
