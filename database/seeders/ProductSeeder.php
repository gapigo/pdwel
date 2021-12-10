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
            'name' => 'João da Silva.',
            'description' => 'Trabalha com web há 14 anos e pretende fazer a sua loja um destaque na web.',
            'exclusive' => false
        ]);
    }
}
