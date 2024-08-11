<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Assign;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'user'
        ];

        foreach ($roles as $role) {
         Role::create([
            'name' => $role,
         ]);
        };

        $permissions = [
            'material-list',
            'material-create',
            'material-edit',
            'material-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
            ]);
        };

        $role = Role::whereName('user')->first();
        $role->syncPermissions($permissions);

        $admin = User::create([
            'name' => 'Ardi',
            'email' => 'ardi@gmail.com',
            'password' => Hash::make('user1234'),
        ]);

        $admin->assignRole(['admin']);
    }
}
