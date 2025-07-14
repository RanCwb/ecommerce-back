<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            [
                'name' => 'Eletrônicos',
                'description' => 'Celulares, TVs, notebooks, fones e mais.',
            ],
            [
                'name' => 'Moda Masculina',
                'description' => 'Roupas, calçados e acessórios para homens.',
            ],
            [
                'name' => 'Moda Feminina',
                'description' => 'Vestuário, bolsas, sapatos e acessórios para mulheres.',
            ],
            [
                'name' => 'Casa e Decoração',
                'description' => 'Móveis, utensílios, iluminação e decoração.',
            ],
            [
                'name' => 'Esportes e Lazer',
                'description' => 'Equipamentos esportivos, bicicletas, camping e mais.',
            ],
            [
                'name' => 'Livros',
                'description' => 'Livros físicos e e-books de diversos gêneros.',
            ],
            [
                'name' => 'Beleza e Cuidados Pessoais',
                'description' => 'Cosméticos, maquiagem, perfumaria e cuidados com a pele.',
            ],
            [
                'name' => 'Brinquedos e Jogos',
                'description' => 'Brinquedos educativos, jogos de tabuleiro, quebra-cabeças e mais.',
            ],
            [
                'name' => 'Informática',
                'description' => 'Computadores, acessórios, impressoras e componentes.',
            ],
            [
                'name' => 'Alimentos e Bebidas',
                'description' => 'Produtos alimentícios, bebidas alcoólicas e não alcoólicas.',
            ],
        ];

        foreach ($categories as $category) {
            $exists = DB::table('categories')->where('name', $category['name'])->exists();

            if (!$exists) {
                DB::table('categories')->insert([
                    'name' => $category['name'],
                    'slug' => Str::slug($category['name']),
                    'description' => $category['description'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
