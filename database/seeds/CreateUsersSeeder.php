<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@admin',
                'is_admin'=>'1',
               'password'=> bcrypt('admin'),
            ],
            
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
