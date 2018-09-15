<?php

use Illuminate\Database\Seeder;

class DiscriminadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discriminadors')->insert([
            ['validacao'=> false, 'text' => 'Obstrucao de vias aereas', 'fluxo_id' => 1, 'prioridade' => 'Vermelho'],
            ['validacao'=> true, 'text' => 'Respiracao inadequada', 'fluxo_id' => 1, 'prioridade' => 'Vermelho'],
            ['validacao'=> false,'text' => 'Choque', 'fluxo_id' => 1, 'prioridade' => 'Vermelho'],
            ['validacao'=> false,'text' => 'Crianca nao reativa', 'fluxo_id' => 1, 'prioridade' => 'Vermelho'],
            ['validacao'=> false,'text' => 'Convulsionando', 'fluxo_id' => 1, 'prioridade' => 'Vermelho'],
            ['validacao'=> false,'text' => 'Alteracao do nivel de conciencia', 'fluxo_id' => 1, 'prioridade' => 'Laranja'],
            ['validacao'=> false,'text' => 'Novo deficit neurologico ha menos de 24h', 'fluxo_id' => 1, 'prioridade' => 'Laranja'],
            ['validacao'=> false,'text' => 'Sinais de meningismo', 'fluxo_id' => 1, 'prioridade' => 'Laranja'],
            ['validacao'=> false,'text' => 'Purpura', 'fluxo_id' => 1, 'prioridade' => 'Laranja'],
            ['validacao'=> false,'text' => 'Erupcao cutanea fixa', 'fluxo_id' => 1, 'prioridade' => 'Laranja'],
            ['validacao'=> false,'text' => 'Inicio abrupto', 'fluxo_id' => 1, 'prioridade' => 'Laranja'],
            ['validacao'=> false,'text' => 'Perda total da visão aguda', 'fluxo_id' => 1, 'prioridade' => 'Laranja'],
            ['validacao'=> false,'text' => 'Crianca muito quente', 'fluxo_id' => 1, 'prioridade' => 'Laranja'],
            ['validacao'=> false,'text' => 'Adulto muito quente', 'fluxo_id' => 1, 'prioridade' => 'Laranja'],
            ['validacao'=> false,'text' => 'Sepse possivel', 'fluxo_id' => 1, 'prioridade' => 'Laranja'],
            ['validacao'=> false,'text' => 'Dor intensa', 'fluxo_id' => 1, 'prioridade' => 'Laranja'],
            ['validacao'=> false,'text' => 'Novo deficit neurologico ha mais de 24h', 'fluxo_id' => 1, 'prioridade' => 'Laranja'],
            ['validacao'=> false,'text' => 'Reducao recente da acuidade visual', 'fluxo_id' => 1, 'prioridade' => 'Laranja']            
        ]);
    }
    
}
