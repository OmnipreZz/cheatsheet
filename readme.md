<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Projet OmniScience - Commands and Shorcuts

CheatSheet en Ligne pour les commandes du terminal et les raccourcis clavier. Un compte admin peut créer/éditer/supprimer des commandes, des raccourcis et des catégories.



## Etapes d'utilisations

- git clone https://github.com/OmnipreZz/cheatsheet.git
- composer install
- renommer le fichier (.env.example) en fichier (.env)
- définir une clé d'application [php artisan key:generate](https://laravel.com/docs/5.7/installation#configuration)
- dans le fichier (.env) remplacer les champs de connection mysql par sa DB localhost
- composer dump-autoload
- créer la DB et les seeders [php artisan migrate:refresh --seed](https://laravel.com/docs/5.7/migrations)
- lancer l'application [php artisan serve](https://laravel.com/docs/5.7/installation#configuration)



## Accés au projet

Adresse du projet http://localhost:8000 : OmniScience - Commands and Shortcuts

Compte Admin :

- email : admin@simplon.co
- password : admin

Accés Admin : 

- http://localhost:8000/login
- http://localhost:8000/admin



## DB Actuelle

Plutôt simple une table pour les raccourcis avec ses catégories associées, même chose pour les commandes.

- Table shortcuts
- Table shortcutcategories
- Table commands
- Table commandcategories
