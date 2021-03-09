<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CronogramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cronogramas = array(
            array('user_id' => '1', 'nome' => 'cronograma 1', 'area' =>'Exatas', 'tipo' => 'Cronograma Automático', 'quantSemanas' => '2', 'quantConteudos' => '2'),
            array('user_id' => '1', 'nome' => 'cronograma 2', 'area' =>'Humanas', 'tipo' => 'Cronograma Automático', 'quantSemanas' => '2', 'quantConteudos' => '2'),
            array('user_id' => '1', 'nome' => 'cronograma 3', 'area' =>'Biológicas', 'tipo' => 'Cronograma Automático', 'quantSemanas' => '2', 'quantConteudos' => '2'),);
        foreach ($cronogramas as $cronograma) {
            \App\Models\Cronograma::create($cronograma);
        }
    }
}
