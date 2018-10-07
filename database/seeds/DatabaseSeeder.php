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
        DB::table('users')->insert([
            'name' => "admin",
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);

        DB::table('shortcutcategories')->insert([
            'name' => "Universel"
        ]);

        DB::table('shortcutcategories')->insert([
            'name' => "VSCode"
        ]);

        DB::table('shortcuts')->insert([
            'name' => "Ctrl + A",
            'description' => "tout selectionner",
            'category_id' => 1
        ]);

        DB::table('shortcuts')->insert([
            'name' => "Ctrl + C",
            'description' => "copier",
            'category_id' => 1
        ]);

        DB::table('shortcuts')->insert([
            'name' => "Ctrl + X",
            'description' => "couper",
            'category_id' => 1
        ]);

        DB::table('shortcuts')->insert([
            'name' => "Ctrl + V",
            'description' => "coller",
            'category_id' => 1
        ]);

        DB::table('commands')->insert([
            'name' => "make:auth",
            'description' => "Authentification",
            'category_id' => 1
        ]);

        DB::table('commands')->insert([
            'name' => "make:controller",
            'description' => "Créer un controlleur",
            'category_id' => 1
        ]);

        DB::table('commands')->insert([
            'name' => "make:migration",
            'description' => "Créer une table",
            'category_id' => 1
        ]);

        DB::table('commandcategories')->insert([
            'name' => "Laravel"
        ]);

        DB::table('commandcategories')->insert([
            'name' => "Symfony"
        ]);

        DB::table('commandcategories')->insert([
            'name' => "Linux"
        ]);

        DB::table('commandcategories')->insert([
            'name' => "Git"
        ]);
        
    }
    
}
