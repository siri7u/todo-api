<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
				factory(Todo:class, 10)->create();
    }
}
