<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/**
 * Class PermissionRoleTableSeeder.
 */
class PermissionRoleTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Create Roles
        foreach(config('seeder.Role') as $role){
            Role::create($role);
        }

        // Create Permissions
        foreach(config('seeder.Permission') as $permission){
            Permission::create($permission);
        }
        // ALWAYS GIVE ADMIN ROLE ALL PERMISSIONS
        Role::where('name',config('access.users.admin_role'))->first()
            ->givePermissionTo('view backend');

        // Assign Permissions to other Roles
        // Role::where('name','executive')->first()
        //     ->givePermissionTo('view backend');
        
        $this->enableForeignKeys();
    }
}
