<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleSysAdmin      = Role::where('name', 'SystemAdmin')->first();
        $roleCoAdmin      = Role::where('name', 'CompanyAdmin')->first();
        $roleCoManager      = Role::where('name', 'CompanyManager')->first();
        $roleCoAccountant      = Role::where('name', 'CompanyAccountant')->first();
        $roleCustomer      = Role::where('name', 'Customer')->first();

        $sysadmin = new User();
        $sysadmin->name = 'System admin';
        $sysadmin->email = 'systemadmin@test.com';
        $sysadmin->phone = '01945498479';
        $sysadmin->address = 'dhaka-kajla-nayanagar';
        $sysadmin->password = bcrypt('12345678');
        $sysadmin->save();
        $sysadmin->roles()->attach($roleSysAdmin);

        $coadmin = new User();
        $coadmin->name = 'Company admin';
        $coadmin->email = 'companyadmin@test.com';
        $coadmin->phone = '01955475476';
        $coadmin->address = 'dhaka-kajla-nayanagar';
        $coadmin->password = bcrypt('12345678');
        $coadmin->save();
        $coadmin->roles()->attach($roleCoAdmin);

        $manager = new User();
        $manager->name = 'manager';
        $manager->email = 'manager@test.com';
        $manager->phone = '01945272476';
        $manager->address = 'dhaka-kajla-nayanagar';
        $manager->password = bcrypt('12345678');
        $manager->save();
        $manager->roles()->attach($roleCoManager);

        $accountant = new User();
        $accountant->name = 'accountant';
        $accountant->email = 'accountant@test.com';
        $accountant->phone = '01945478996';
        $accountant->address = 'dhaka-kajla-nayanagar';
        $accountant->password = bcrypt('12345678');
        $accountant->save();
        $accountant->roles()->attach($roleCoAccountant);

        $customer = new User();
        $customer->name = 'customer';
        $customer->email = 'customer@test.com';
        $customer->phone = '01941178476';
        $customer->address = 'dhaka-kajla-nayanagar';
        $customer->password = bcrypt('12345678');
        $customer->save();
        $customer->roles()->attach($roleCustomer);

    }
}
