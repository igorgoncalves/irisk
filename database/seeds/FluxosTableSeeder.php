<?php

use Illuminate\Database\Seeder;

class FluxosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fluxos')->insert([
            ['text' => 'Cefaleia'],
            ['text' => 'Diarreia e/ou vomito'],
            ['text' => 'Dispneia em adulto'],
            ['text' => 'Dor Abdominal em Adulto'],
            ['text' => 'Mal-estar em Adulto']]);
    }
}
