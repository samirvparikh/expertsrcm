<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            'User' => ['users.index', 'users.store', 'users.create', 'users.show', 'users.update', 'users.destroy', 'users.edit'],
            'Eligibility' => ['eligibility.export', 'eligibilities.form', 'eligibilities.index', 'eligibility.store', 'eligibility.getGroupData'],
            'Provider' => ['providers.index', 'providers.store', 'providers.create', 'providers.show', 'providers.update', 'providers.destroy', 'providers.edit'],
            'Patient' => ['patients.index', 'patients.create', 'patients.show', 'patients.update', 'patients.destroy', 'patients.edit'],
            'Office' => ['offices.index', 'offices.store', 'offices.create', 'offices.show', 'offices.update', 'offices.destroy', 'offices.edit'],
        ];

        foreach ($permissions as $groupName => $permissionList) {
            foreach ($permissionList as $permission) {
                Permission::firstOrCreate([
                    'name' => $permission,
                    'guard_name' => 'web',
                ], [
                    'group_name' => $groupName,
                ]);
            }
        }
    }
}
