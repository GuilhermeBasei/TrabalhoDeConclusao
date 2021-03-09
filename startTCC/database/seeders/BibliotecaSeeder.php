<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BibliotecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bibliotecas = array(
            array('nome' => 'Matemática', 'conteudos' => '
Equações de 1º e 2º graus/Grandezas proporcionais e médias algébricas/Porcentagem e matemática financeira/Funções/Noções básicas de estatística/Probabilidade/Área de figuras planas e polígonos
'),
            array('nome' => 'Física', 'conteudos' => 'Movimento, equilíbrio e leis/Fenômenos elétricos e magnéticos/Potência, energia e trabalho/Oscilações, radiação, ondas e óptica/Mecânica e universo/O calor e os fenômenos térmicos/Conhecimentos básicos e fundamentais.
'),
            array('nome' => 'Lingua portuguesa', 'conteudos' => 'Gêneros textuais/Variação Linguística/Leitura e Artes'),
        );
        foreach ($bibliotecas as $biblioteca) {
            \App\Models\Biblioteca::create($biblioteca);
        }
    }
}
