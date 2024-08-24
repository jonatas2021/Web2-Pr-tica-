<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Ficção', 'Não-ficção', 'Fantasia', 'Ciência', 'Biografia',
            'História', 'Tecnologia', 'Arte', 'Culinária', 'Viagem'
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(['name' => $category]);
        }
    }
}
