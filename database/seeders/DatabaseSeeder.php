<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tissu;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Patron;
use App\Models\Projet;
use App\Models\Categorie;
use App\Models\TissuType;
use App\Models\ToBuyList;
use App\Models\Inspiration;
use App\Models\Mensuration;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Yann',
        //     'email' => 'yann@example.com',
        // ]);

        $user = new User;
        $user->name = "Yann";
        $user->email = "yann.malfer@gmail.com";
        $user->password = Hash::make('1234');
        $user->save();

        $user2 = new User;
        $user2->name = "Mathou";
        $user2->email = "mathou@gmail.com";
        $user2->password = Hash::make('1234');
        $user2->save();

        $tissuType = new TissuType;
        $tissuType->nom = "jean";
        $tissuType->save();

        $tissuType2 = new TissuType;
        $tissuType2->nom = "coton";
        $tissuType2->save();

        $tissu = new Tissu;
        $tissu->nom = "Tissu 1";
        $tissu->poids = 300; // g/m2
        $tissu->laize = 2; // (largeur en cm)
        $tissu->prix = 10; // (en euros/m et en euros/10cm)
        $tissu->stock = 1; // (en m)
        $tissu->provenance = "mercerie Dupont";
        $tissu->prelave= false;
        $tissu->oekotex = true;
        $tissu->bio = true;
        $tissu->note = 4.5;
        $tissu->commentaire = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident voluptas id eum aperiam, iure delectus corrupti cum facere nemo earum
                            asperiores officiis autem voluptates suscipit ipsum doloribus repudiandae minima! Debitis!";
        $tissu->user_id = $user->id;
        $tissu->tissu_type_id = $tissuType->id;
        $tissu->save();

        $tissu2 = new Tissu;
        $tissu2->nom = "Tissu 2";
        $tissu2->poids = 300; // g/m2
        $tissu2->laize = 2; // (largeur en cm)
        $tissu2->prix = 10; // (en euros/m et en euros/10cm)
        $tissu2->stock = 0; // (en m)
        $tissu2->provenance = "mercerie Dupont";
        $tissu2->prelave= false;
        $tissu2->oekotex = true;
        $tissu2->bio = true;
        $tissu2->note = 4;
        $tissu2->commentaire = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident voluptas id eum aperiam, iure delectus corrupti cum facere nemo earum
                            asperiores officiis autem voluptates suscipit ipsum doloribus repudiandae minima! Debitis!";
        $tissu2->user_id = $user->id;
        $tissu2->tissu_type_id = $tissuType->id;
        $tissu2->save();

        $tissu3 = new Tissu;
        $tissu3->nom = "Tissu 3";
        $tissu3->poids = 300; // g/m3
        $tissu3->laize = 3; // (largeur en cm)
        $tissu3->prix = 10; // (en euros/m et en euros/10cm)
        $tissu3->stock = 0; // (en m)
        $tissu3->provenance = "mercerie Dupont";
        $tissu3->prelave= false;
        $tissu3->oekotex = true;
        $tissu3->bio = true;
        $tissu3->note = 4;
        $tissu3->commentaire = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident voluptas id eum aperiam, iure delectus corrupti cum facere nemo earum
                            asperiores officiis autem voluptates suscipit ipsum doloribus repudiandae minima! Debitis!";
        $tissu3->user_id = $user->id;
        $tissu3->tissu_type_id = $tissuType2->id;
        $tissu3->save();

        $tissu4 = new Tissu;
        $tissu4->nom = "Tissu 4";
        $tissu4->poids = 400; // g/m4
        $tissu4->laize = 4; // (largeur en cm)
        $tissu4->prix = 10; // (en euros/m et en euros/10cm)
        $tissu4->stock = 0; // (en m)
        $tissu4->provenance = "mercerie Dupont";
        $tissu4->prelave= false;
        $tissu4->oekotex = true;
        $tissu4->bio = true;
        $tissu4->note = 4;
        $tissu4->commentaire = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident voluptas id eum aperiam, iure delectus corrupti cum facere nemo earum
                            asperiores officiis autem voluptates suscipit ipsum doloribus repudiandae minima! Debitis!";
        $tissu4->user_id = $user2->id;
        $tissu4->tissu_type_id = $tissuType2->id;
        $tissu4->save();

        $patron = new Patron;
        $patron->nom = "Nom du patron";
        $patron->marque = "marque du patron";
        $patron->support = "pdf";
        $patron->vetement_type = "chemise";
        $patron->silhouette = "grand";
        $patron->note = 3;
        $patron->commentaire = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident voluptas id eum aperiam, iure delectus corrupti cum facere nemo earum
                            asperiores officiis autem voluptates suscipit ipsum doloribus repudiandae minima! Debitis!";
        $patron->user_id = $user->id;
        $patron->save();

        $mensuration = new Mensuration;
        $mensuration->prenom = "Albert";
        $mensuration->nom = "Dupont";
        $mensuration->taille = 170;
        $mensuration->tour_de_poitrine = 50;
        $mensuration->tour_de_taille = 45;
        $mensuration->tour_de_hanches = 60;
        $mensuration->user_id = $user->id;
        $mensuration->save();

        $projet = new Projet;
        $projet->nom = "Nom du projet";
        $projet->statut = "en_cours";
        $projet->taille = 40;
        $projet->destinataire = "moi";
        $projet->fil = "bleu";
        $projet->aiguille = "aiguille longue";
        $projet->point = "point normal";
        $projet->commentaire = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Provident voluptas id eum aperiam, iure delectus corrupti cum facere nemo earum
                            asperiores officiis autem voluptates suscipit ipsum doloribus repudiandae minima! Debitis!";
        $projet->user_id = $user->id;
        $projet->patron_id = $patron->id;
        $projet->mensuration_id = $mensuration->id;
        $projet->save();

        $projet->tissus()->attach($tissu->id);

        $inspiration = new Inspiration;
        $inspiration->description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Provident voluptas id eum aperiam, iure delectus corrupti cum facere nemo earum
                                    asperiores officiis autem voluptates suscipit ipsum doloribus repudiandae minima! Debitis!";
        $inspiration->user_id = $user->id;
        $inspiration->save();

        $categorie1 = new Categorie;
        $categorie1->nom = "tissu";
        $categorie1->user_id = $user->id;
        $categorie1->save();

        $categorie2 = new Categorie;
        $categorie2->nom = "aiguille";
        $categorie2->user_id = $user->id;
        $categorie2->save();

        $categorie3 = new Categorie;
        $categorie3->nom = "fils";
        $categorie3->user_id = $user->id;
        $categorie3->save();

        $toBuyList = new ToBuyList;
        $toBuyList->nom = "tissu bleu";
        $toBuyList->quantite = 3;
        $toBuyList->magasin = "mercerie du centre ville";
        $toBuyList->categorie_id = $categorie1->id;
        $toBuyList->user_id = $user->id;
        $toBuyList->save();
    }
}
