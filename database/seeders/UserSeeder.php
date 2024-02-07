<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class UserSeeder extends Seeder
{
    public function run()
    {
        collect(range(1, 1))->each(function ()
        {

            $admin = User::create([
                'name' => 'Ramanaruban',
                'email' => 'admin_2@agri.com',
                'password' => bcrypt('agri@123'),
                'contact_no'=>"0771192656",
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'current_team_id'=>1,
            ]);



            $permissions = Permission::pluck('id','id')->all();
            $admin->assignRole(Role::ROLE_ADMIN);
            $admin->syncPermissions($permissions);
            $admin->givePermissionTo($permissions);



        });


    }
}
