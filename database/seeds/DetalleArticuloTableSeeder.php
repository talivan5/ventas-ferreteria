<?php

use Illuminate\Database\Seeder;

class DetalleArticuloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DetalleIngreso::class, 50)->create();
    }
}
