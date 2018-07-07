<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Role::create ([
            'title'  =>  'Owner',
            'slug'  =>  'owner',
        ]);

        App\Role::create ([
            'title'  =>  'Admin',
            'slug'  =>  'admin',
        ]);   
                
         App\Role::create ([
            'title' =>  'Subscriber',
            'slug'  =>  'subscriber',
        ]);   
                
		 App\Role::create ([
            'title'  =>  'Guest',
        	'slug'  => 	'guest',
        ]);   
         
    }
}
