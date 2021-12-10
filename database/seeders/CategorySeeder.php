<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'eCommerce',
            'description' => 'Monte sua loja virtual.',
            'image' => 'images/categorias/ecommerce.jpeg',
        ]);
        Category::create([
            'name' => 'Aplicativos',
            'description' => 'Tenha um aplicativo com sua identidade para atingir o seu público mobile.',
            'image' => 'images/categorias/aplicativos.jpg',
        ]);
        Category::create([
            'name' => 'Automação de Processos',
            'description' => 'Aumente a produtividade da sua empresa com soluções digitais inteligentes.',
            'image' => 'images/categorias/automacao_de_processos.png',
        ]);
        Category::create([
            'name' => 'Chatbots',
            'description' => 'Converse com seus clientes com uma interação pessoal automatizada.',
            'image' => 'images/categorias/chatbots.jpg',
        ]);
        Category::create([
            'name' => 'Data Science',
            'description' => 'Trace estratégias inteligentes com uma análise apurada de dados.',
            'image' => 'images/categorias/data_science.png',
        ]);
        Category::create([
            'name' => 'Desktop',
            'description' => 'Desenvolva uma solução offline para plataformas de PC.',
            'image' => 'images/categorias/desktop.png',
        ]);
        Category::create([
            'name' => 'Web Design',
            'description' => 'Desenvolva um site para sua empresa.',
            'image' => 'images/categorias/webdesign.jpg',
        ]);
        Category::create([
            'name' => 'WordPress',
            'description' => 'Tenha um site na plataforma de criação de sites mais popular do mundo.',
            'image' => 'images/categorias/wordpress.jpg',
        ]);

        // Category::create([
        //     'name' => 'Placas de vídeo', 
        //     'image' => 'images/jesus-kiteque-wn-KYaHwcis-unsplash.jpg', 
        //     'description' => 'Objetos mais caros do mundo']);
    }
}
