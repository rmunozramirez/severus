<?php

use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Gender::create ([
            'title'  =>  'Nicht bekannt gegeben',
        ]);

         App\Gender::create ([
            'title'  =>  'Frau',
        ]);

         App\Gender::create ([
            'title'  =>  'Mann',
        ]);

    }
}
