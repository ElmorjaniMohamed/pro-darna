<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define permissions
        $permissions = [
            'create-properties',
            'create-agencies',
            'send-message',
            'update-properties',
            'delete-properties',
            'update-agencies',
            'delete-agencies'
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Define roles
        $roles = [
            'admin' => ['create-properties', 'create-agencies', 'send-message', 'update-properties', 'delete-properties', 'update-agencies', 'delete-agencies'],
            'agent' => ['create-properties', 'create-agencies', 'update-properties', 'delete-properties', 'update-agencies', 'delete-agencies']
        ];

        foreach ($roles as $roleName => $rolePermissions) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            $permissions = Permission::whereIn('name', $rolePermissions)->get();
            $role->permissions()->sync($permissions);
        }

        // Create users
        $users = [
            ['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => bcrypt('admin'), 'role' => 'admin'],
            ['name' => 'Agent', 'email' => 'agent@gmail.com', 'password' => bcrypt('agent'), 'role' => 'agent']
        ];

        foreach ($users as $user) {
            $newUser = User::firstOrCreate(
                ['email' => $user['email']],
                ['name' => $user['name'], 'password' => $user['password']]
            );
            $role = Role::where('name', $user['role'])->first();
            if ($role) {
                $newUser->roles()->attach($role);
            }
        }
    }
}