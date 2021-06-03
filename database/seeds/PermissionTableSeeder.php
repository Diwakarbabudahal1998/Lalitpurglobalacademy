<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Admin']);
        $role = Role::create(['name' => 'Waiter']);
        $role = Role::create(['name' => 'Kitchen']);
        $role = Role::create(['name' => 'Cashier']);

    }
}
