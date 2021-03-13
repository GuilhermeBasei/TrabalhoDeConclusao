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
            array('nome' => 'Lingua portuguesa', 'conteudos' => 'Gêneros textuais/Variação Linguística/Leitura e Artes/Intertextualidade/Figuras de linguagem ligadas ao aspecto semântico/Funções da linguagem'),
            array('nome' => 'História', 'conteudos' => 'Segunda Guerra Mundial e suas consequências/Segunda Revolução Industrial /Primeira Guerra Mundial/Grandes Navegações/Segundo Reinado/Era Vargas/Ditadura Militar/Crise do Sistema Colonial'),
            array('nome' => 'Geografia', 'conteudos' => 'Questões ambientais/Agropecuária/Fases do capitalismo/Urbanização/Indústria/Migrações/Comércio/Geologia e relevo/População/Hidrografia'),
            array('nome' => 'Sociologia', 'conteudos' => 'Cultura/Cidadania/Movimentos Sociais/Política, Estado e Governo/Revolução Científica e Industrial/Sociedade Contemporânea/Teorias Sociológicas'),
            array('nome' => 'Filosofia', 'conteudos' => 'Ética justiça /Natureza do Conhecimento/Democracia e Cidadania/Filosofia Contemporânea/Filosofia Moderna/Relações de Poder'),
            array('nome' => 'Quimica', 'conteudos' => 'Ligações químicas/Polaridade/Reações orgânicas/Eletroquímica/Leis ponderais e estequiometria/Soluções/Estados físicos, sistema e misturas'),
            array('nome' => 'Biologia', 'conteudos' => 'Ecologia/Genética/Fisiologia animal/Parasitologia/Sistema imunitário /DNA e RNA/Proteínas e enzimas/Angiosperma '),

        );
        foreach ($bibliotecas as $biblioteca) {
            \App\Models\Biblioteca::create($biblioteca);
        }
    }
}
