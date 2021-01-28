<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolesSeeder extends Seeder
{
  
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $user=new User
        ([
            'name'=>'kike',
            'lastname'=>'viera',
            'email'=>'kikero0502@gmail.com',
            'password'=>Hash::make('password123'),
            ]);
        $roles = [
            new Role(['rol_name'=>'admin']),
            new Role(['rol_name'=>'CEO']),
            new Role(['rol_name'=>'writer']),
        ];
            
            
        $user->save();
        foreach ($roles as $rolname) {
           $rolname->save();
            // DB::table('roles')->insert([
            //     'rol_name' => $rolname->rol_name
            // ]);
        }
        $user->roles()->attach(Role::find(1));

    
    }
}
