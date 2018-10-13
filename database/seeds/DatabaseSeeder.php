<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Create Admin
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'admin@simplon.co',
            'password' => bcrypt('admin')
        ]);

        // Create Command Categories
        DB::table('commandcategories')->insert([
            'name' => "Linux"
        ]);

        DB::table('commandcategories')->insert([
            'name' => "Git"
        ]);

        DB::table('commandcategories')->insert([
            'name' => "Laravel"
        ]);

        DB::table('commandcategories')->insert([
            'name' => "Symfony"
        ]);
        
        // Create Shortcut Categories
        DB::table('shortcutcategories')->insert([
            'name' => "Universel"
        ]);

        DB::table('shortcutcategories')->insert([
            'name' => "Ubuntu"
        ]);

        DB::table('shortcutcategories')->insert([
            'name' => "VSCode"
        ]);

        DB::table('shortcutcategories')->insert([
            'name' => "Terminator"
        ]);

        // Create Shortcuts
        DB::table('shortcuts')->insert([
            'name' => "Ctrl + A",
            'description' => "Tout selectionner",
            'category_id' => 1
        ]);

        DB::table('shortcuts')->insert([
            'name' => "Ctrl + C",
            'description' => "Copier",
            'category_id' => 1
        ]);

        DB::table('shortcuts')->insert([
            'name' => "Ctrl + X",
            'description' => "Couper",
            'category_id' => 1
        ]);

        DB::table('shortcuts')->insert([
            'name' => "Ctrl + V",
            'description' => "Coller",
            'category_id' => 1
        ]);

        DB::table('shortcuts')->insert([
            'name' => "Ctrl + B ",
            'description' => "Afficher / Cacher la sidebar",
            'category_id' => 3
        ]);

        DB::table('shortcuts')->insert([
            'name' => "Ctrl + Shift + E ",
            'description' => "Scinder la fenêtre verticalement",
            'category_id' => 4
        ]);

        DB::table('shortcuts')->insert([
            'name' => "Ctrl + Shift + O ",
            'description' => "Scinder la fenêtre horizontalement",
            'category_id' => 4
        ]);

        DB::table('shortcuts')->insert([
            'name' => "Ctrl + Shift + W ",
            'description' => "Ferme la fenêtre courante",
            'category_id' => 4
        ]);

        DB::table('shortcuts')->insert([
            'name' => "Ctrl + Shift + X ",
            'description' => "Agrandir la fenêtre courante",
            'category_id' => 4
        ]);

        // Create Commands
        DB::table('commands')->insert([
            'name' => "cd",
            'description' => "Se déplacer et changer de dossier",
            'category_id' => 1
        ]);

        DB::table('commands')->insert([
            'name' => "ls",
            'description' => "Lister le contenu des dossiers",
            'category_id' => 1
        ]);

        DB::table('commands')->insert([
            'name' => "mkdir",
            'description' => "Créer un nouveau dossier",
            'category_id' => 1
        ]);

        DB::table('commands')->insert([
            'name' => "git init",
            'description' => "Initialisation d'un dépôt Git",
            'category_id' => 2
        ]);

        DB::table('commands')->insert([
            'name' => "make:auth",
            'description' => "Authentification",
            'category_id' => 3
        ]);

        DB::table('commands')->insert([
            'name' => "make:controller",
            'description' => "Créer un controlleur",
            'category_id' => 3
        ]);

        DB::table('commands')->insert([
            'name' => "make:migration",
            'description' => "Créer une table",
            'category_id' => 3
        ]);
        
    }
    
}
