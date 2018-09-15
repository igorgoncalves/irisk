<?php

use Illuminate\Database\Seeder;

class ParametroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parametros')->insert([
            ['discriminador_id' => 16, 'nome' => 'Escala de dor', 'condicao' => '>', 'limite' => '6', 'prioridade' => 'Laranja'],
            ['discriminador_id' => 16, 'nome' => 'Escala de dor', 'condicao' => '<', 'limite' => '7', 'prioridade' => 'Amarelo']
        ]);
    }
    
}
