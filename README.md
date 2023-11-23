# Autoformation Laravel

Bienvenue dans le parcours d'autoformation Laravel ! Ce guide est conçu pour vous aider à démarrer avec Laravel et à trouver des ressources supplémentaires pour votre autoformation.

## Pour commencer

### Prérequis

Avant de commencer, assurez-vous d'avoir installé les éléments suivants :

- [Composer](https://getcomposer.org/) : Gestionnaire de dépendances pour PHP.
- [PHP](https://www.php.net/) : Laravel nécessite PHP 7.3.0 ou version ultérieure.
- [Node.js](https://nodejs.org/) : Laravel Mix, le compilateur d'actifs, dépend de Node.js.

### Comment commencer avec Laravel

Pour créer un nouveau projet Laravel, suivez les étapes ci-dessous :

1. Installez Laravel en utilisant Composer :

    ```bash
    composer create-project --prefer-dist laravel/laravel nom-du-projet
    ```

    Remplacez `nom-du-projet` par le nom que vous souhaitez donner à votre projet.

2. Accédez au répertoire de votre projet :

    ```bash
    cd nom-du-projet
    ```

3. Copiez le fichier d'environnement :

    ```bash
    cp .env.example .env
    ```

4. Générez la clé d'application :

    ```bash
    php artisan key:generate
    ```

5. Configurez votre base de données dans le fichier `.env`.

6. Exécutez les migrations et remplissez la base de données :

    ```bash
    php artisan migrate --seed
    ```

7. Lancez le serveur de développement :

    ```bash
    php artisan serve
    ```
Maintenant, vous êtes prêt à commencer votre parcours d'autoformation Laravel !

## Chapitres

# Laravel Documentation Overview

This repository covers various aspects of Laravel development. Each section is linked to the relevant Laravel documentation for in-depth information.

## Eloquent: Accessors and Mutators

Learn about [Eloquent Accessors and Mutators](https://laravel.com/docs/eloquent-mutators) in the Laravel documentation.

## Eloquent: Seed and Factory

Understand how to use [Eloquent Seed and Factory](https://laravel.com/docs/seeding) in Laravel for efficient database seeding.

## Front-end with Vite

Explore the integration of [Vite](https://laravel-mix.com/docs/6.0/vite) for front-end development in Laravel.

## Blade Components

Master the use of [Blade Components](https://laravel.com/docs/blade) for efficient and reusable view components.

## Laravel Breeze

Get started with [Laravel Breeze](https://laravel.com/docs/breeze) for a minimal and elegant authentication scaffolding.

## Policies

Learn about [Policies](https://laravel.com/docs/authorization) in Laravel for handling authorization logic.

## Service Provider

Understand the role of a [Service Provider](https://laravel.com/docs/providers) in Laravel application bootstrapping.

## Events

Explore the usage of [Events](https://laravel.com/docs/events) to handle various actions in your Laravel application.

## Notifications

Implement [Notifications](https://laravel.com/docs/notifications) to send notifications across different channels.

## Internationalization

Manage translations and [Internationalization](https://laravel.com/docs/localization) in Laravel applications.

## Queues

Learn about [Queues](https://laravel.com/docs/queues) and how to handle background tasks efficiently.

## API Resource

Create and manage [API Resources](https://laravel.com/docs/8.x/eloquent-resources) for building powerful APIs.

## Testing with Laravel

Explore the testing capabilities of Laravel using [Testing](https://laravel.com/docs/testing) documentation.

## Hosting and Deployment

Understand the process of [Hosting and Deployment](https://laravel.com/docs/deployment) for Laravel applications.

## Shared Hosting via SSH (Infomaniak)

Learn how to deploy Laravel applications on shared hosting with SSH, using [Infomaniak](https://www.infomaniak.com/).

Feel free to explore each chapter for detailed information and examples!


## Ressources 

- [Laracasts](https://laracasts.com/series/laravel-8-from-scratch) : Une excellente ressource pour les screencasts et tutoriels vidéo Laravel.
- [Laravel News](https://laravel-news.com/) : Restez informé des dernières actualités, tutoriels et packages Laravel.
- [Laravel Podcast](https://www.laravelpodcast.com/) : Écoutez des discussions sur des sujets liés à Laravel.
- [Laravel playist](https://youtube.com/playlist?list=PLe30vg_FG4OTxKekbWLABcpstdeCDA4LQ&si=qwpSjOJUbgHR-Goa) : playlist laravel

