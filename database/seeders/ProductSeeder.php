<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1 eCommerce 
        // 2 Aplicativos
        // 3 Automação de Processos
        // 4 Chatbots
        // 5 Data Science
        // 6 Desktop
        // 7 Web Design
        // 8 WordPress

        Product::create([
            'category_id' => 1,
            'name' => 'Julieta Martins',
            'description' => 'Contato:(49) 8097-4399
            julietaalmeidamartins@fleckens.hu
            Experiência: Trabalha 4 anos com vendas, sendo desses, 3 em desenvolvimento de sistemas. Domina bem a criação de um eCommerce. Contate já.',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Júlia Carvalho',
            'description' => 'Contato: (11) 2288-9283
            email: juliasantoscarvalho@gmail.com
            Experiência: Desenvolve para web faz 15 anos e tem ampla experiência no ramo de eCommerce',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Bruno Cavalcanti',
            'description' => 'Tel: (48) 9500-7181 | Email: brunogomescavalcanti@dayrep.com
            Experiência: Já fez mais de 30 sistemas para eCommerce com grande taxa de satisfação pelos clientes.',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Isabella Carvalho',
            'description' => '(51) 3110-9183 isabellacostacarvalho@hotmail.com Trabalha com vendas e sites',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'Gabrielle Oliveira',
            'description' => 'gabriellemartinsoliveira@superrito.com (31) 8532-5240. Desenvolveu mais de 30 aplicativos para android',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'Brenda Silva',
            'description' => '(62) 2333-9493 brendacavalcantisilva@gustr.com
            Experiência: Desenvolvedora mobile profissional, trabalha no ramo há mais de 10 anos',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'Thiago Carvalho',
            'description' => '(21) 4105-7518
            Experiência: Lançou mais de 50 aplicativos para apple store e atua desde 2008 no ramo',
            'exclusive' => true
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'Lucas Melo',
            'description' => 'lucasbarbosamelo@teleworm.us (82) 7172-4215
            Ampla experiência no mercado mobile e grande agilidez na hora de desenvolver.',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'Sarah Souza',
            'description' => 'Email: sarahfernandessouza@dayrep.com Tel: (16) 3980-4469
            Nomeada pela apple como desenvolvedor do ano em 2015, tendo lançado mais de 25 aplicativos de médio porte no mercado',
            'exclusive' => true
        ]);
        Product::create([
            'category_id' => 3,
            'name' => 'Laura Oliveira',
            'description' => '(21) 5855-3528 lauraferreiraoliveira@gmail.com
            Cientista da computação, atual há mais de 30 anos na área e domina ampla gama de tecnologias e conhecimentos',
            'exclusive' => true
        ]);
        Product::create([
            'category_id' => 3,
            'name' => 'Lara Pereira',
            'description' => 'Telefone: (62) 4023-8478 
            Email:laracavalcantipereira@armyspy.com
            Descrição: Trabalha com data science em python, R e cobol; já participou de projetos importantes',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 3,
            'name' => 'Evelyn Ribeiro',
            'description' => 'Contato: (19) 7604-4876 evelynferreiraribeiro@jourrapide.com
            Experiência: Automatiza processos desde 2005, formada em engenharia de produção',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 3,
            'name' => 'Amanda Martins',
            'description' => '(54) 9035-5134 amandaaraujomartins@cuvox.de
            Currículo breve: Profissional de renome conhecida pela microsoft, já trabalhou na IBM,
             Totvs e foi responsável por automatizar processos importantes de diferentes indústrias',
            'exclusive' => true
        ]);
        Product::create([
            'category_id' => 3,
            'name' => 'Alex Azevedo',
            'description' => '(11) 4690-4326 alexalvesazevedo@hotmail.com
            Conhecimento: Grande raciocínio de programação, analísta por natureza e domínio técnico das principais linguagens',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Pedro Azevedo',
            'description' => '(53) 3016-9906 pedroribeiroazevedo@superrito.com
            CV: Trabalha com desenvolvimento há mais de 13 anos e atua na área de Chatbots há 4 anos. Fez vários projetos para whatsapp e telegram.',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Igor Costa',
            'description' => 'Contato: (24) 5348-8638
            igorazevedocosta@fleckens.hu
            Conhecimento: Desenvolvimento de chatbots para whatsapp, telegram e criação de inteligencias artificiais sofisticadas',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'José Sousa',
            'description' => '(62) 6289-3156 josesilvasousa@teleworm.us
            Capacitação: Já criou mais de 15 chatbots com grande grau de satisfação',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Gabriel Rodrigues',
            'description' => 'Número: (31) 8657-6504 e-Mail: gabrielfernandesrodrigues@einrot.com
            Experiência: Trabalhou por 20 anos na Microsft e foi responsável pelo desenvolvimento da Cortana',
            'exclusive' => true
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Breno Azevedo',
            'description' => '(11) 8194-8564 brenogomesazevedo@jourrapide.com
            Competências: Domínio de inteligência artificial, integração de APIs, UX e plataformas mobile. Perfeito para construir o seu chatbot!',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Luiz Pereira',
            'description' => '(42) 5614-9392 luizrodriguespereira@rhyta.com
            Experiência: Trabalhou na LATAM (ex TAM) como hacker growther e atua no segmento há mais de 5 anos.',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Lara Araujo',
            'description' => '(62) 3614-8841
            Email: laraazevedoaraujo@gmail.com
            Analítica por natureza, tem grande fascínio pelos dados.',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Alice Gomes',
            'description' => '(51) 3047-2133 alicealmeidagomes@hotmail.com
            Competências: Grande base de estatística, desenvolvimento de IAs avançadas e grande domínio dos algoritmos de visualização de dados',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Miguel Oliveira',
            'description' => 'miguelfernandesoliveira@fleckens.hu
            Trabalha com power BI e python para fazer uma leitura dos processos a serem analisados',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Breno Barros',
            'description' => 'Comunicação: brenopintobarros@hotmail.com | (11) 6107-7542
            Conhecimento e história: Atua como estatístico desde 1987 e entrou pro ramo da análise inteligente de dados em 2001.',
            'exclusive' => true
        ]);
        Product::create([
            'category_id' => 6,
            'name' => 'Sarah Santos',
            'description' => 'sarahcavalcantisantos@armyspy.com (61) 8982-4277
            Conhecimento: Java, UX, Python, String, PHP, Laravel, C++',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 6,
            'name' => 'Bruna Barbosa',
            'description' => '(21) 3857-7692
            email: brunabarrosbarbosa@fleckens.hu
            experiência: Parceira da IBM por 10 anos e atua no segmento de aplicações desde 2003',
            'exclusive' => true
        ]);
        Product::create([
            'category_id' => 6,
            'name' => 'Tomás Barros',
            'description' => '(85) 9748-3461 tomasoliveirabarros@gmail.com
            Habilidades: JavaUI, C++, C# e plataforma .NET. Capaz entregar uma aplicação desktop com agilidade e rapidez que você precisa.',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 6,
            'name' => 'Julieta Sousa',
            'description' => 'julietacorreiasousa@rhyta.com (11) 2996-4047
            Experiência: Atua desde 2013, já trabalhou na Google e concluiu mais de 20 projetos para clientes como free-lancer.',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 6,
            'name' => 'Kauan Goncalves',
            'description' => '(11) 7021-9557
            Desenvolveu para diversas plataformas e consegue entregar rápido uma aplicação para você!',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Vitória Oliveira',
            'description' => '(51) 7509-4325 vitoriacorreiaoliveira@armyspy.com
            Habilidades: ',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Emily Alves',
            'description' => 'Tel: (14) 2135-6059
            Mail: emilycorreiaalves@cuvox.de
            Currículo breve: Trabalha desde 1997 com web, expert em React, Vue e Angular',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Luíza Almeida Ribeiro',
            'description' => '(19) 3567-4385 luizaalmeidaribeiro@einrot.com
            Carreira: Ganhadora de vários concursos de programação, trabalha com Web desde 
            2018, mas já entregou mais de 70 projetos diferentes. Profissional reconhecida na área.',
            'exclusive' => true
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Lucas Rodrigues',
            'description' => '(83) 7279-3765 | lucascunharodrigues@gmail.com
            Trabalha com React e Node, tem grande grau de satisfação entre os clientes. A pessoa certa para fazer seu site.',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Murilo Carvalho',
            'description' => 'telefone: (44) 5346-8431, email: muriloalvescarvalho@cuvox.de
            Conheça o meu portfólio no meu site pessoal: www.muriloalvescarvalho.com e agende já uma call comigo via teams',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 8,
            'name' => 'Luiz Ribeiro',
            'description' => 'Telefone: (11) 7917-6704
            Email: luizbarrosribeiro@superrito.com
            Experiência: Desenvolve em WordPress desde 2013, tendo já entregado mais de 400 projetos para diferentes clientes.',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 8,
            'name' => 'Bruno Gomes',
            'description' => 'Telefone: (51) 6533-9622 
            Contato por email: brunopereiragomes@cuvox.de
            História e experiência: Conheceu o WordPress em 2004, depois da crise das .com; Parceiro oficial e perito da área.',
            'exclusive' => true
        ]);
        Product::create([
            'category_id' => 8,
            'name' => 'Leonor Martins',
            'description' => '(83) 4083-2265 // leonorcarvalhomartins@rhyta.com
            Desenvolve um website profissional do WordPress em até 1 semana. Negocie já o seu projeto!',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 8,
            'name' => 'Melissa Fernandes',
            'description' => '(31) 7719-3498
            email: melissaazevedofernandes@gustr.com
            experiência: Trabalha com WordPress desde 2013 e fascinada com a rapidez que da plataforma, 
            tendo já entregado mais de 100 sites, com grande grau de satisfação',
            'exclusive' => false
        ]);
        Product::create([
            'category_id' => 8,
            'name' => 'Alex Martins',
            'description' => 'Telefone para contato: (11) 9194-8736;
            Correio eletrônico: alexcostamartins@superrito.com;
            Currículo e história: Trabalha com WordPress desde 2016, ex-engenheiro aeronáutico da Embraer,
            agora maravilhado com a tecnologia e comprometido com entregas de qualidade para seus clientes.',
            'exclusive' => false
        ]);

    }
}
