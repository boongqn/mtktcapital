<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        for ($i=0; $i < 10 ; $i++) { 
           \App\Customer::create([
                'first_name' => 'Lorem ',
                'last_name'  => $i,
                'role_id'    => 'apply',
                'active'    => 1,
                'email'      => 'admin@gmail.com',
                'phone'      => 123456789
            ]);
        }


        // \App\User::create([
        //     'name'  => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        
    }
}
