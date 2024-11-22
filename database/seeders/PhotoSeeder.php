<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Photo;
use App\Models\Categorie;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Récupérer les 10 premières catégories existantes
        $categories = Categorie::take(10)->get();

        // Créer des photos pour chaque catégorie
        foreach ($categories as $categorie) {
            Photo::factory()->create([
                'category' => $categorie->type,
            ]);
        }
    }
}
