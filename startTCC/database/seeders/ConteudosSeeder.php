<?php

namespace Database\Seeders;

use App\Models\Conteudo;
use Illuminate\Database\Seeder;

class ConteudosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conteudos = array(
            array('conteudosExatas' => 'Grandezas Proporcionais/Acústica/Geometria Espacial/Energia, trabalho e potência/Aritmética/Resistores/Funções/Calorimetria/Estatística/Impulso, quantidade de movimento e análise dimensional/Geometria Plana/Introdução à óptica geométrica/Probabilidades/Atrito e movimento circular/Médias/Forças magnéticas, indução e fluxo/Estudo dos gases/Trigonometria/Razão e Proporção/Matriz inversa/Conjuntos/Reações endotérmicas e Exotérmicas/Calor e temperatura/Estados Físicos da Matéria/Entropia/Seno, Cosseno e Tangente/Área do Triângulo/Média, Moda e Mediana/Desvio Padrão/Gases/ Geradores, receptores, capacitores e leis de Kirchhoff/Interferência/Estatística/Gráficos/Logaritmos/Retas/ Refração e lentes / Equilíbrio/ Cônicas e gráficos relacionados / Paralelepípedos / Hidrostática / Mudanças de estado / Ondas periódicas / Potenciação e conjuntos numéricos/ Troncos / Análise combinatória  / Reflexão da luz / Movimento harmônico simples (MHS) / Ondulatória  / Propagação de calor / Função do 2º grau e inequações/ Geometria espacial / Funções trigonométricas  / Probabilidade / Área de figuras planas e polígonos/ Magnetismo e suas interações / Lançamento oblíquo no vácuo / Eletrodinâmica/  Gravitação universal / Cinemática vetorial  / Sequências/ Equações elementares/ Notação Científica/ Matriz/ Porcentagem/ Análise gráfica de espaço/Velocidade/Aceleração/ Escala/ Sequências/ Semelhança de polígonos/ Função quadrática/ Circunferência/ Mecânica/ Eletricidade/ Ondulatória/ Magnetismo/ Inequações do 1º e 2º graus/ Função exponencial/ Trigonometria algébrica/ Poliedros /Pirâmides/ Óptica/ Termologia',
                'ConteudosHumanas' => 'Segunda Guerra Mundial e suas consequências/Questões ambientais/Cultura/Ética justiça/Tipos de texto/Segunda Revolução Industrial/Agropecuária/Cidadania/ Natureza do Conhecimento/Funções da linguagem/Primeira Guerra Mundial/Fases do capitalismo/Movimentos Sociais/Democracia e Cidadania/Categorias de mundo/ Grandes Navegações/Urbanização/Política, Estado e Governo/Filosofia Contemporânea/Intertextualidade/Segundo Reinado/Indústria/Revolução Científica e Industrial/Filosofia Moderna/Narratividade/Era Vargas/Migrações/Sociedade Contemporânea/Relações de Poder/Variação linguística/Ditadura Militar/Geologia e relevo/Teorias Sociológicas/Surgimento da Filosofia/Figuras de linguagem ligadas ao aspecto semântico/Crise do Sistema Colonial/População/Filosofia Medieval/Expressão/ Hidrografia/Nazismo/Clima/Fases do Renascimento/Teorias Demográficas/Comunismo/Estado Absolutista/Ética aristotélica/Caixa de Pandora/Guerra do Contestado/Lei Maria da Penha/Zona Franca de Manaus/Rochas Metamórficas/Pontos cardeais, colaterais e subcolaterais/Fases do Renascimento/Cangaço/Mulheres que fizera a história do Brasil/Globalização Econômica/Imperialismo na África/Biosfera/Paisagem natural e paisagem cultural/ Toyotismo/Fordismo/Desastras naturais/Racismo no Brasil/Budismo/Guerra na Síria/Estados do Brasil/Guerra Fria/Usina Hidrelétrica/Silogismo/Sofistas/Escola de Frankfurt/Feminismo/Democracia/Cristianismo/Climas do Brasil/Pantanal/Zumbi dos Palmares/Arte Egípcia/Empirismo/Auguste Comte/Marxismo/Estado de bem-estar social/Fim da URSS/Projeções Cartográficas',
                'conteudosBiologicas' => 'Sistema imunológico/ Ligações químicas, polaridade e forças / Ecossistema / Reações orgânicas / Fundamentos da Ecologia / Compostos orgânicos / DNA e RNA / Eletroquímica/ Genética / Leis ponderais e estequiometria / Hematologia / Soluções/Angiosperma/Estados físicos, sistemas e misturas /Proteínas e enzimas /Equilíbrios, hidrólise e solubilidade /Bioenergética/ Reações inorgânicas /Bioma /Termoquímica/Crescimento populacional/ Radioatividade /Evolução/Cinética química/Excreções /Isomeria /Genoma humano /Modelos atômicos e distribuição eletrônica /Organização celular  /Propriedades das substâncias e forças intermoleculares/Relações ecológicas /Aminoácidos, proteínas, lipídeos e carboidratos/Biogênese e abiogênese /Caráter acidobásico de substâncias orgânicas/Classificação dos seres vivos /Oxirredução /Embriologia/Polímeros Filo Chordata /Propriedades coligativas /Grupos zoológicos /Propriedades periódicas dos elementos/Material genético/ Mecanismos de evolução/ Membrana plasmática/ Noções de Bioenergética/Nutrição e secreção vegetal/Ácidos e Bases/Solubilidade/Diluição/Protozoários/Reino Monera /Sistema digestório e vitaminas/Sistema nervoso/Sistema Rh/Equilíbrios químicos/ Constante de equilíbrio de solubilidade(Kps)/Radiação/Transporte pela membrana/Trocas gasosas em plantas /Verminoses/Leis de Mendel/Mutações/Combustão/Transesterificação/Saponificação/Virus/Procationtes e eucariontes/Grupos sanguíneos/Biodiversidade/Ecossistemas/Chuva ácida/Aquecimento global/Energia solar/Gases do efeito estufa/Funções vitais/Embriologia/Anatomia/Teorias da evolução/ haletos orgânicos/ ácidos sulfônicos/ Funções nitrogenadas/Origem do universo/Seleção natural/Doenças sexualmente transmissíveis ',
                'conteudosTodas' => 'Sistema imunológico/ Ligações químicas, polaridade e forças / Segunda Guerra Mundial e suas consequências/Questões ambientais/Cultura/Ética justiça/Tipos de texto/ Grandezas Proporcionais/Acústica/ Ecossistema / Reações orgânicas //Segunda Revolução Industrial/Agropecuária/Cidadania/ Natureza do Conhecimento/Funções da linguagem/ Geometria Espacial/Energia, trabalho e potência/ Fundamentos da Ecologia / Compostos orgânicos/ Primeira Guerra Mundial/Fases do capitalismo/Movimentos Sociais/Democracia e Cidadania/Categorias de mundo/ Aritmética/Resistores/ DNA e RNA / Eletroquímica/ Genética / Leis ponderais e estequiometria/ Grandes Navegações/Urbanização/Política, Estado e Governo/Filosofia Contemporânea/Intertextualidade/Segundo Reinado/Indústria/Revolução Científica e Industrial/Filosofia Moderna/Narratividade/Era Vargas/Migrações/Sociedade Contemporânea/Relações de Poder/Variação linguística/ Estatística/Impulso, quantidade de movimento e análise dimensional/Geometria Plana/Introdução à óptica geométrica/Probabilidades/Atrito e movimento circular/Médias/Forças magnéticas, indução e fluxo/ haletos orgânicos/ ácidos sulfônicos/ Funções nitrogenadas/Origem do universo/Seleção natural/Doenças sexualmente transmissíveis/Empirismo/Auguste Comte/Marxismo/Estado de bem-estar social/ Ondulatória/ Magnetismo/ Inequações do 1º e 2º graus/ Função exponencial/ Trigonometria algébrica/ Poliedros /Pirâmides/ Óptica/ Termologia/Guerra na Síria/Estados do Brasil/Guerra Fria/Usina Hidrelétrica/Silogismo/Sofistas/Escola de Frankfurt/Feminismo/Democracia/Cristianismo/Climas do Brasil/Pantanal/Zumbi dos Palmares/Arte Egípcia',
                'materiaExatas' => 'Matemática/Física/Matemática/Física/Matemática/Física/Matemática/Física/Matemática/Física/Matemática/Física/Matemática/Física/Matemática/Física/Física/Matemática/Matemática/Matemática/Matemática/Física/Física/Física/Física/ Matemática/ Matemática/ Matemática/ Matemática/Física/ Física/ Física/ Matemática/ Matemática/ Matemática/ Matemática/ Física/ Física/ Matemática/ Matemática/ Física/ Física/ Física/ Matemática/ Matemática/ Matemática/ Física/ Física/ Física/ Física/ Matemática/ Matemática/ Matemática/ Matemática/ Matemática/ Física/ Física/ Física/ Física/ Física/ Matemática/ Matemática/ Matemática/ Matemática/ Matemática/ Física/ Física/ Física/ Matemática/ Matemática/ Matemática/ Matemática/ Matemática/ Física/ Física/ Física/ Física/ Matemática/ Matemática/ Matemática/ Matemática/ Matemática/ Física/ Física/',
                'materiaHumanas' => 'História/Geografia/Sociologia/Filosofia/Língua portuguesa/História/Geografia/Sociologia/Filosofia/Língua portuguesa/História/Geografia/Sociologia/Filosofia/Língua portuguesa/História/Geografia/Sociologia/Filosofia/Língua portuguesa/História/Geografia/Sociologia/Filosofia/Língua portuguesa/História/Geografia/Sociologia/Filosofia/Língua portuguesa/História/Geografia/Sociologia/Filosofia/Língua portuguesa/História/Geografia/Filosofia/Língua portuguesa/Geografia/História/Geografia/História/Geografia/Sociologia/Sociologia/Filosofia/Filosofia/História/História/Geografia/Geografia/Geografia/História/História/História/Geografia/Geografia/Geografia/Geografia/Sociologia/Sociologia/Geografia/História/História/História/Geografia/Geografia/Geografia/Filosofia/Filosofia/Filosofia/Sociologia/Sociologia/Sociologia/Geografia/Geografia/História/História/Filosofia/Filosofia/Sociologia/Sociologia/Geografia/Geografia',
                'materiaBiologicas' => 'Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Química/Biologia/Biologia/Biologia/Biologia/Biologia/Química/Química/Química//Biologia/Biologia/Biologia/Biologia/Biologia/Química/Química/Química/Biologia/Biologia/Biologia/Biologia/Biologia/ Química/ Química/ Química/ Biologia/ Biologia/ Biologia/ Biologia/ Biologia/ Química/ Química/ Química/ Química/ Biologia/ Biologia/ Biologia/ Biologia/ Química/ Química/ Química/ Biologia/ Biologia/ Biologia/',
                'materiaTodas' => 'Biologia/Química/História/Geografia/Sociologia/Filosofia/Língua portuguesa/ Matemática/Física/Biologia/Química/ História/Geografia/Sociologia/Filosofia/Filosofia/Língua portuguesa/ Matemática/Física/ Biologia/Química/ História/Geografia/Sociologia/Filosofia/Língua portuguesa/Matemática/Física/ Biologia/Química/ Biologia/Química/ História/Geografia/Sociologia/Filosofia/Língua portuguesa/ História/Geografia/Sociologia/Filosofia/Língua portuguesa/ História/Geografia/Sociologia/Filosofia/Língua portuguesa/ Matemática/Física/ Matemática/Física/ Matemática/Física/ Matemática/Física/ Química/ Química/ Química/ Biologia/ Biologia/ Biologia/ Filosofia/Filosofia/Sociologia/Sociologia/ Física/ Física/ Matemática/ Matemática/ Matemática/ Matemática/ Matemática/ Física/ Física/ História/Geografia/História/Geografia/Filosofia/Filosofia/Filosofia/Sociologia/Sociologia/Sociologia/Geografia/Geografia/História/História/
',
                ));


        foreach ($conteudos as $conteudo) {
            Conteudo::create($conteudo);
        }
    }
}
