<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\Recipe;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Recipe::create([
            'title' => 'Perník',
            'ingredients' => '2 celé vajcia, 300 g cukru, 400 g hladkej múky, 1 čajová lyžička škorice, 1 lyžička sódy bikarbóny, 1 lyžička kakaa, 1 kypriaci prášok do perníka, 0.5 dl oleja, 0.5 litra vlažného mlieka, 2 veľké lyžice lekváru',
            'instructions' => 'Všetko spolu vymiešať, vrátane lekváru. Podľa potreby môžete pridať ďalšie ingrediencie, ako napríklad orechy, hrozienka, alebo čokoládu. Zmes vylejeme na vymastený a posypaný plech. Pečieme na 220°C po dobu 20 až 30 minút. Ešte horúce potrieme džemom a čokoládovou polevou (50 g masla + 100 g čokolády).'
        ]);

        Recipe::create([
            'title' => 'Pagáče',
            'ingredients' => '500 g hladkej múky, 2 žĺtky, 1 bielok, kvások, 2 kávové lyžičky soli, 1 modrá kyslá smotana, 2 lyžice masti, 4 polievkové lyžice zemiakového cesta (nastrúhať 2 veľké zemiaky), 500g oškvarkov',
            'instructions' => 'Zmiešame všetko dokopy, necháme nakysnúť. Vyvaľkáme na 0,5 cm, pridáme oškvarky. Celý postup opakujeme tri krát. Cesto necháme odpočívať jednu hodinu. Rozvaľkáme, vykrojíme, pridáme soľ alebo orey, potrieme vajcom a dáme piecť na 200°C na cca 15 minút.'
        ]);

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        ]);

        Listing::create([
            'title' => 'Full-Stack Engineer',
            'tags' => 'laravel, backend ,api',
            'website' => 'https://www.starkindustries.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        ]);
        Listing::create([
        'title' => 'Laravel Developer',
        'tags' => 'laravel, vue, javascript',
        'website' => 'https://www.wayneenterprises.com',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        ]);

    }
}
