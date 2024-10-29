<?php

namespace Database\Seeders;

use App\Models\User;
use App\RoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $admin = Role::create(['name' => RoleEnum::ADMIN]);
        $user = Role::create(['name' => RoleEnum::USER]);

        $permiso1 = Permission::create(['name' => 'create post']);
        $permiso2 = Permission::create(['name' => 'edit post']);
        $permiso3 = Permission::create(['name' => 'delete post']);
        $permiso4 = Permission::create(['name' => 'view post']);

        $admin->givePermissionTo($permiso4);
        $user->givePermissionTo($permiso1, $permiso2, $permiso3);

        $yo = User::find(5);
        $yo->assignRole('admin');
    }
}
