<?php

namespace Database\Seeders;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        /**
         *  Admin Role
         */
        $role = Role::updateOrCreate(['id' => 1], [
            'id' => 1,
            'name' => 'Admin',
            'description' => 'Admin',
        ]);
        $role->permissions()->sync(Permission::all()->pluck('id'));

        /**
         * Admin User
         */
        $user = User::updateOrCreate(['id' => 1], [
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->roles()->sync([1]);
    }
}
