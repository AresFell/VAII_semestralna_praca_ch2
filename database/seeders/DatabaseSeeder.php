<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Recipe;
use App\Models\User;
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

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
        ]);

        Recipe::create([
            'user_id' => 1,
            'title' => 'Perník',
            'ingredients' => '2 celé vajcia, 300 g cukru, 400 g hladkej múky, 1 čajová lyžička škorice, 1 lyžička sódy bikarbóny, 1 lyžička kakaa, 1 kypriaci prášok do perníka, 0.5 dl oleja, 0.5 litra vlažného mlieka, 2 veľké lyžice lekváru',
            'instructions' => 'Všetko spolu vymiešať, vrátane lekváru. Podľa potreby môžete pridať ďalšie ingrediencie, ako napríklad orechy, hrozienka, alebo čokoládu. Zmes vylejeme na vymastený a posypaný plech. Pečieme na 220°C po dobu 20 až 30 minút. Ešte horúce potrieme džemom a čokoládovou polevou (50 g masla + 100 g čokolády).'
        ]);

        Recipe::create([
            'user_id' => 1,
            'title' => 'Pagáče',
            'ingredients' => '500 g hladkej múky, 2 žĺtky, 1 bielok, kvások, 2 kávové lyžičky soli, 1 modrá kyslá smotana, 2 lyžice masti, 4 polievkové lyžice zemiakového cesta (nastrúhať 2 veľké zemiaky), 500g oškvarkov',
            'instructions' => 'Zmiešame všetko dokopy, necháme nakysnúť. Vyvaľkáme na 0,5 cm, pridáme oškvarky. Celý postup opakujeme tri krát. Cesto necháme odpočívať jednu hodinu. Rozvaľkáme, vykrojíme, pridáme soľ alebo orey, potrieme vajcom a dáme piecť na 200°C na cca 15 minút.'
        ]);

        Recipe::create([
            'user_id' => 1,
            'title' => 'Jablkové pité',
            'ingredients' => '350 g hladkej múky, 200 g masla, 4 lyžice práškového cukru, 1 žĺtok, pol prášku do pečiva, štipka soli, troška mlieka',
            'instructions' => 'Vymiešame. Polovicu cesta dáme na plech, na to 1 kg strúhaných jabĺk, 150-200 g cukru, trochu citrónovej kôry. Na vrch dáme zbytok cesta. Popichať, potrieť bielkom a dať piecť na 230°C na 25 min.'
        ]);

        Recipe::create([
            'user_id' => 1,
            'title' => 'Moravské koláče',
            'ingredients' => '500 g hladkej múky, 3 žĺtky, 2.5 dcl mlieka, 12 čajových lyžičiek cukru, kvasnice, 1 dcl oleja, štipka soli',
            'instructions' => 'Zamiešať, rozvaľkať, nechať znova kysnúť, naplniť (tvaroh, lekvár) a posypať.'
        ]);

        Recipe::create([
            'user_id' => 1,
            'title' => 'Oblátky',
            'ingredients' => '600 g múky (100 g hrubej, ostatná hladká), 150 g kryštálového cukru, 100 g masla, 1 žĺtok, 0.5 l mlieka, vanilkový a škoricový cukor',
            'instructions' => 'Cukor rozpustiť v 1,5 litri vody (uvariť sirup – jeme ťahavý). Všetko dáme do misky a zmiešame. Pokiaľ je husté, pridáme vodu.'
        ]);

        Recipe::create([
            'user_id' => 1,
            'title' => 'Čokoládový rez',
            'ingredients' => '4 vajcia, 300 g hnedý cukor, 2 vanilkový cukor, 170 g hladkej múky, 1 prášok do pečiva, 250 g masla, 200 g čokolády 70%, 40 g kakaa, 250 g malín',
            'instructions' => 'Vymiešať vajcia s cukrom, múkou, práškom do pečiva, kakaom a vanilkou. Roztopiť maslo s čokoládou, nechať vychladnúť. Spojíme obe zmesi. Na plech dať papier na pečenie, vyliať hmotu, ozdobiť malinami. Piecť pri 180°C asi 30 minút. Nechať vo vypnutej trúbe, s otvorenými dvierkami vychladnúť.'
        ]);

        Recipe::create([
            'user_id' => 1,
            'title' => 'Linecké zlepované kolieska',
            'ingredients' => '750 g hladkej múky, 500 g palmarín (akoby maslo), 250 g práškového cukru, 2 žĺtky',
            'instructions' => 'Všetko zmiešame spolu a hneď vykrojíme. Pečieme pri teplote 220°C na 20 minút.'
        ]);

        Recipe::create([
            'user_id' => 1,
            'title' => 'Slané oškvarkové slimáky',
            'ingredients' => '500 g polohrubej múky, 250 g masla, 1 polievková lyžica soli, 1 žĺtok, 1 vajce na potieranie, syr, kvások, oškvarky',
            'instructions' => 'Kvások, múku, maslo, soľ a žĺtok spolu vymiešame a necháme vykysnúť. Cesto rozdelíme na 6 rovnakých dielov. Vyvaľkáme na kruh, potrieme pomletými oškvarkami, posekáme ako pizzu a stáčame z vonka smerom ku stredu. Pečieme na 200°C na 30 minút.'
        ]);
    }
}
