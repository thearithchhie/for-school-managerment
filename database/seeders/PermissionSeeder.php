<?php

namespace Database\Seeders;
use App\Models\Module;
use App\Models\Permission;
use App\Models\Action;

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Module::truncate();
        Module::insert([
            [
                'category' => 'Department',
                'name' => 'Department',
                'sort' => 1, //1
                'status' => 1,
            ],
            [
                'category' => 'User',
                'name' => 'User',
                'sort' => 1, //1
                'status' => 1,
            ]
        
        ]);

        /**
         *  Action
         */
        Action::truncate();
        Action::insert([
            ['name' => 'create'], //1
            ['name' => 'update'],//2
            ['name' => 'list'],//3
            ['name' => 'delete'],//4
        ]);

        /**
         *  Permission
         */
        Permission::truncate();
        Module::find(1)->actions()->sync([1]);
        Module::find(2)->actions()->sync([1,2,3,4]);
    }
}
