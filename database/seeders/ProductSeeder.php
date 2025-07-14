<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon; // Para usar now() de forma mais flexível se precisar de ajuste de fuso

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $productsData = [
            'Eletrônicos' => [
                [
                    'name' => 'Smartphone Ultra Pro X',
                    'description' => 'Celular de última geração com câmera de 108MP e processador octa-core.',
                    'price' => 4599.99,
                    'stock_quantity' => 50,
                    'is_active' => true,
                ],
                [
                    'name' => 'Smart TV 55 polegadas 4K OLED',
                    'description' => 'Experiência imersiva com cores vibrantes e som de cinema.',
                    'price' => 3299.00,
                    'stock_quantity' => 30,
                    'is_active' => true,
                ],
                [
                    'name' => 'Notebook Gamer Power R7',
                    'description' => 'Desempenho extremo para jogos e tarefas pesadas com RTX 4070.',
                    'price' => 7890.50,
                    'stock_quantity' => 20,
                    'is_active' => true,
                ],
                [
                    'name' => 'Fone de Ouvido Bluetooth Premium',
                    'description' => 'Cancelamento de ruído ativo e áudio de alta fidelidade.',
                    'price' => 599.90,
                    'stock_quantity' => 120,
                    'is_active' => true,
                ],
                [
                    'name' => 'Smartwatch Esportivo GPS',
                    'description' => 'Monitora batimentos, sono e atividades físicas com precisão.',
                    'price' => 849.00,
                    'stock_quantity' => 75,
                    'is_active' => true,
                ],
            ],
            'Moda Masculina' => [
                [
                    'name' => 'Camisa Social Slim Fit Algodão',
                    'description' => 'Camisa elegante para ocasiões formais, 100% algodão egípcio.',
                    'price' => 189.90,
                    'stock_quantity' => 80,
                    'is_active' => true,
                ],
                [
                    'name' => 'Calça Jeans Premium Skinny',
                    'description' => 'Jeans com lavagem especial e caimento perfeito, conforto e estilo.',
                    'price' => 250.00,
                    'stock_quantity' => 100,
                    'is_active' => true,
                ],
                [
                    'name' => 'Tênis Casual Couro Legítimo',
                    'description' => 'Conforto e durabilidade, ideal para o dia a dia.',
                    'price' => 320.00,
                    'stock_quantity' => 60,
                    'is_active' => true,
                ],
                [
                    'name' => 'Blazer de Linho Masculino',
                    'description' => 'Leve e moderno, perfeito para um look sofisticado e fresco.',
                    'price' => 450.00,
                    'stock_quantity' => 40,
                    'is_active' => true,
                ],
                [
                    'name' => 'Relógio de Pulso Clássico',
                    'description' => 'Aço inoxidável e movimento suíço, elegância atemporal.',
                    'price' => 680.00,
                    'stock_quantity' => 25,
                    'is_active' => true,
                ],
            ],
            'Moda Feminina' => [
                [
                    'name' => 'Vestido Floral Verão Longo',
                    'description' => 'Leve e fluído, ideal para dias quentes e eventos casuais.',
                    'price' => 280.00,
                    'stock_quantity' => 70,
                    'is_active' => true,
                ],
                [
                    'name' => 'Bolsa de Couro Genuíno Croco',
                    'description' => 'Espaçosa e elegante, com detalhes em dourado.',
                    'price' => 750.00,
                    'stock_quantity' => 35,
                    'is_active' => true,
                ],
                [
                    'name' => 'Scarpin Salto Fino Preto',
                    'description' => 'Clássico e versátil, perfeito para o trabalho ou festas.',
                    'price' => 199.90,
                    'stock_quantity' => 55,
                    'is_active' => true,
                ],
                [
                    'name' => 'Saia Plissada Midi Colorida',
                    'description' => 'Tendência e conforto, para looks modernos e descontraídos.',
                    'price' => 160.00,
                    'stock_quantity' => 90,
                    'is_active' => true,
                ],
                [
                    'name' => 'Brincos de Pérolas Barrocas',
                    'description' => 'Elegância e sofisticação para qualquer ocasião.',
                    'price' => 120.00,
                    'stock_quantity' => 150,
                    'is_active' => true,
                ],
            ],
            'Casa e Decoração' => [
                [
                    'name' => 'Sofá Retrátil e Reclinável 3 Lugares',
                    'description' => 'Conforto e modernidade para sua sala de estar.',
                    'price' => 2500.00,
                    'stock_quantity' => 15,
                    'is_active' => true,
                ],
                [
                    'name' => 'Mesa de Jantar Redonda 4 Cadeiras',
                    'description' => 'Design escandinavo, ideal para pequenos espaços.',
                    'price' => 1200.00,
                    'stock_quantity' => 10,
                    'is_active' => true,
                ],
                [
                    'name' => 'Kit 3 Quadros Decorativos Abstratos',
                    'description' => 'Arte moderna para dar um toque especial ao ambiente.',
                    'price' => 180.00,
                    'stock_quantity' => 80,
                    'is_active' => true,
                ],
                [
                    'name' => 'Luminária de Chão Tripé Industrial',
                    'description' => 'Perfeita para leitura ou para criar um ambiente acolhedor.',
                    'price' => 299.00,
                    'stock_quantity' => 45,
                    'is_active' => true,
                ],
                [
                    'name' => 'Conjunto de Cama Queen Percal 400 Fios',
                    'description' => 'Luxo e maciez para noites de sono perfeitas.',
                    'price' => 580.00,
                    'stock_quantity' => 60,
                    'is_active' => true,
                ],
            ],
            'Esportes e Lazer' => [
                [
                    'name' => 'Bicicleta Mountain Bike Aro 29',
                    'description' => '21 marchas e freio a disco, ideal para trilhas.',
                    'price' => 999.00,
                    'stock_quantity' => 25,
                    'is_active' => true,
                ],
                [
                    'name' => 'Kit Halteres Emborrachados 20kg',
                    'description' => 'Ideal para treino em casa, com 4 pesos diferentes.',
                    'price' => 350.00,
                    'stock_quantity' => 70,
                    'is_active' => true,
                ],
                [
                    'name' => 'Barraca de Camping Iglu 4 Pessoas',
                    'description' => 'Fácil montagem, impermeável e resistente ao vento.',
                    'price' => 420.00,
                    'stock_quantity' => 30,
                    'is_active' => true,
                ],
                [
                    'name' => 'Bola de Futebol Campo Profissional',
                    'description' => 'Costurada à mão, alta durabilidade e precisão.',
                    'price' => 150.00,
                    'stock_quantity' => 100,
                    'is_active' => true,
                ],
                [
                    'name' => 'Raquete de Tênis Fibra de Carbono',
                    'description' => 'Leve e potente, para jogadores intermediários e avançados.',
                    'price' => 560.00,
                    'stock_quantity' => 20,
                    'is_active' => true,
                ],
            ],
            'Livros' => [
                [
                    'name' => 'O Senhor dos Anéis: A Sociedade do Anel',
                    'description' => 'Primeiro volume da clássica trilogia de J.R.R. Tolkien.',
                    'price' => 65.00,
                    'stock_quantity' => 200,
                    'is_active' => true,
                ],
                [
                    'name' => '1984',
                    'description' => 'Distopia de George Orwell que alerta sobre regimes totalitários.',
                    'price' => 45.00,
                    'stock_quantity' => 180,
                    'is_active' => true,
                ],
                [
                    'name' => 'Mindset: A Nova Psicologia do Sucesso',
                    'description' => 'Livro de Carol S. Dweck sobre a mentalidade fixa e de crescimento.',
                    'price' => 55.00,
                    'stock_quantity' => 150,
                    'is_active' => true,
                ],
                [
                    'name' => 'Box Harry Potter - Coleção Completa',
                    'description' => 'Todos os sete livros da saga em uma edição especial.',
                    'price' => 399.00,
                    'stock_quantity' => 70,
                    'is_active' => true,
                ],
                [
                    'name' => 'Pequeno Príncipe - Edição Luxo',
                    'description' => 'Clássico de Antoine de Saint-Exupéry, com ilustrações originais.',
                    'price' => 80.00,
                    'stock_quantity' => 120,
                    'is_active' => true,
                ],
            ],
            'Beleza e Cuidados Pessoais' => [
                [
                    'name' => 'Kit Skincare Facial Completo',
                    'description' => 'Limpeza, hidratação e proteção para todos os tipos de pele.',
                    'price' => 280.00,
                    'stock_quantity' => 90,
                    'is_active' => true,
                ],
                [
                    'name' => 'Perfume Feminino Floral Frutado 50ml',
                    'description' => 'Fragrância marcante e duradoura, para o dia a dia.',
                    'price' => 350.00,
                    'stock_quantity' => 65,
                    'is_active' => true,
                ],
                [
                    'name' => 'Máscara Capilar Hidratante Intensiva',
                    'description' => 'Nutrição profunda para cabelos secos e danificados.',
                    'price' => 75.00,
                    'stock_quantity' => 150,
                    'is_active' => true,
                ],
                [
                    'name' => 'Kit Pincéis de Maquiagem Profissionais',
                    'description' => '12 pincéis essenciais para uma maquiagem impecável.',
                    'price' => 199.00,
                    'stock_quantity' => 110,
                    'is_active' => true,
                ],
                [
                    'name' => 'Protetor Solar Facial FPS 50',
                    'description' => 'Proteção UVA/UVB com toque seco e rápida absorção.',
                    'price' => 60.00,
                    'stock_quantity' => 200,
                    'is_active' => true,
                ],
            ],
            'Brinquedos e Jogos' => [
                [
                    'name' => 'Quebra-Cabeça 1000 Peças - Paisagem',
                    'description' => 'Desafie sua mente com este lindo quebra-cabeça de alta qualidade.',
                    'price' => 85.00,
                    'stock_quantity' => 90,
                    'is_active' => true,
                ],
                [
                    'name' => 'Jogo de Tabuleiro Aventura Mágica',
                    'description' => 'Para toda a família, explore um mundo de fantasia e estratégia.',
                    'price' => 120.00,
                    'stock_quantity' => 70,
                    'is_active' => true,
                ],
                [
                    'name' => 'Boneca Interativa Fala e Canta',
                    'description' => 'Ensina frases e canções, para crianças a partir de 3 anos.',
                    'price' => 180.00,
                    'stock_quantity' => 60,
                    'is_active' => true,
                ],
                [
                    'name' => 'Kit Blocos de Montar Grande',
                    'description' => 'Estimula a criatividade e coordenação motora, com 200 peças.',
                    'price' => 99.00,
                    'stock_quantity' => 110,
                    'is_active' => true,
                ],
                [
                    'name' => 'Carrinho de Controle Remoto Radical',
                    'description' => 'Manobras radicais e alta velocidade, para diversão garantida.',
                    'price' => 220.00,
                    'stock_quantity' => 50,
                    'is_active' => true,
                ],
            ],
            'Informática' => [
                [
                    'name' => 'Monitor Gamer Curvo 27 polegadas 144Hz',
                    'description' => 'Imersão total nos jogos com alta taxa de atualização.',
                    'price' => 1499.00,
                    'stock_quantity' => 40,
                    'is_active' => true,
                ],
                [
                    'name' => 'Teclado Mecânico RGB Switch Red',
                    'description' => 'Experiência de digitação e jogo superior, com iluminação customizável.',
                    'price' => 380.00,
                    'stock_quantity' => 80,
                    'is_active' => true,
                ],
                [
                    'name' => 'Mouse Gamer Óptico 16000 DPI',
                    'description' => 'Precisão e customização para gamers profissionais.',
                    'price' => 220.00,
                    'stock_quantity' => 95,
                    'is_active' => true,
                ],
                [
                    'name' => 'Webcam Full HD 1080p com Microfone',
                    'description' => 'Ideal para videochamadas e streaming de alta qualidade.',
                    'price' => 150.00,
                    'stock_quantity' => 130,
                    'is_active' => true,
                ],
                [
                    'name' => 'SSD NVMe 1TB Ultra Rápido',
                    'description' => 'Velocidade de leitura e escrita incríveis para seu sistema e jogos.',
                    'price' => 650.00,
                    'stock_quantity' => 60,
                    'is_active' => true,
                ],
            ],
            'Alimentos e Bebidas' => [
                [
                    'name' => 'Café Gourmet Moído 500g',
                    'description' => 'Grãos selecionados, aroma intenso e sabor marcante.',
                    'price' => 35.00,
                    'stock_quantity' => 300,
                    'is_active' => true,
                ],
                [
                    'name' => 'Vinho Tinto Chileno Cabernet Sauvignon',
                    'description' => 'Safra 2022, corpo médio, notas de frutas vermelhas e especiarias.',
                    'price' => 89.90,
                    'stock_quantity' => 150,
                    'is_active' => true,
                ],
                [
                    'name' => 'Azeite Extra Virgem Italiano 500ml',
                    'description' => 'Primeira prensagem a frio, ideal para saladas e finalização de pratos.',
                    'price' => 55.00,
                    'stock_quantity' => 200,
                    'is_active' => true,
                ],
                [
                    'name' => 'Barra de Chocolate Suíço Amargo 70%',
                    'description' => 'Intenso e cremoso, para os amantes de chocolate de verdade.',
                    'price' => 20.00,
                    'stock_quantity' => 400,
                    'is_active' => true,
                ],
                [
                    'name' => 'Kit Cervejas Artesanais Variadas',
                    'description' => '6 cervejas especiais de diferentes estilos, para degustação.',
                    'price' => 120.00,
                    'stock_quantity' => 100,
                    'is_active' => true,
                ],
            ],
            // Adicione mais categorias e produtos se necessário para corresponder à sua lista completa
            // 'Luxo' não tem produtos aqui, você pode adicionar.
            'Luxo' => [
                [
                    'name' => 'Bolsa de Grife em Couro Exótico',
                    'description' => 'Peça exclusiva com acabamento artesanal e detalhes em ouro.',
                    'price' => 7500.00,
                    'stock_quantity' => 5,
                    'is_active' => true,
                ],
                [
                    'name' => 'Relógio Suíço de Luxo Automático',
                    'description' => 'Edição limitada com cronógrafo e caixa de ouro 18K.',
                    'price' => 15000.00,
                    'stock_quantity' => 2,
                    'is_active' => true,
                ],
                [
                    'name' => 'Colar de Diamantes Brilhantes',
                    'description' => 'Design elegante com diamantes lapidados à mão em ouro branco.',
                    'price' => 9800.00,
                    'stock_quantity' => 3,
                    'is_active' => true,
                ],
            ],
        ];

        // Busca as categorias existentes para obter seus IDs
        $categoriesFromDb = DB::table('categories')->get()->keyBy('name');

        foreach ($productsData as $categoryName => $products) {
            $category = $categoriesFromDb->get($categoryName);

            // Verifica se a categoria existe no banco de dados antes de inserir produtos
            if ($category) {
                foreach ($products as $product) {
                    // Verifica se o produto já existe para evitar duplicatas (opcional)
                    $exists = DB::table('products')
                        ->where('name', $product['name'])
                        ->where('category_id', $category->id)
                        ->exists();

                    if (!$exists) {
                        DB::table('products')->insert([
                            'category_id' => $category->id,
                            'name' => $product['name'],
                            'slug' => Str::slug($product['name']), // Slug baseado no nome do produto
                            'description' => $product['description'],
                            'price' => $product['price'],
                            'stock_quantity' => $product['stock_quantity'],
                            'is_active' => $product['is_active'],
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                }
            } else {
                $this->command->warn("Atenção: Categoria '{$categoryName}' não encontrada no banco de dados para popular produtos.");
            }
        }
    }
}
