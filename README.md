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

## Introduction à Laravel

Bienvenue dans la documentation Laravel, un guide complet couvrant divers aspects du développement avec le framework Laravel. Explorez chaque section pour obtenir des informations approfondies sur les fonctionnalités clés.

## Structure des dossiers

Plongez dans la [structure des dossiers](https://laravel.com/docs/structure) de Laravel pour comprendre l'organisation optimale de vos fichiers et dossiers dans une application Laravel.

## Le Routing

Découvrez les tenants et aboutissants du [Routing dans Laravel](https://laravel.com/docs/routing) pour définir les points d'entrée de votre application et gérer les requêtes HTTP.

## L'ORM Eloquent

Explorez les [accesseurs et mutateurs Eloquent](https://laravel.com/docs/eloquent-mutators) ainsi que l'utilisation des [Seeders et Factories](https://laravel.com/docs/seeding) pour optimiser le remplissage de votre base de données.

## Les Controllers

Maîtrisez l'art de créer et d'utiliser des [Controllers](https://laravel.com/docs/controllers) pour gérer la logique métier de votre application de manière structurée.

## Moteur de template Blade

Utilisez efficacement les [composants Blade](https://laravel.com/docs/blade) pour construire des vues réutilisables et bien organisées dans votre application.

## Valider les données

Apprenez à [valider les données](https://laravel.com/docs/validation) dans Laravel pour assurer l'intégrité des informations soumises par les utilisateurs.

## Model binding

Explorez le [model binding](https://laravel.com/docs/routing#route-model-binding) pour simplifier l'interaction avec vos modèles dans les routes de votre application.

## Debugbar et IDE Helper

Optimisez votre processus de développement avec des outils tels que [Debugbar](https://laravel.com/docs/8.x/telescope) et [IDE Helper](https://github.com/barryvdh/laravel-ide-helper).

## Les formulaires

Découvrez comment créer et traiter des [formulaires dans Laravel](https://laravel.com/docs/8.x/eloquent-resources) pour interagir avec les utilisateurs de manière efficace.

## Les Relations

Explorez les différents types de [relations entre les modèles](https://laravel.com/docs/eloquent-relationships) dans Eloquent pour structurer efficacement votre base de données.

## Authentification

Commencez avec [Laravel Breeze](https://laravel.com/docs/breeze) pour mettre en place un système d'authentification minimal et élégant dans votre application.

## Système de fichiers

Apprenez à manipuler le [système de fichiers](https://laravel.com/docs/filesystem) dans Laravel pour gérer les fichiers et les images de manière sécurisée.

N'hésitez pas à explorer chaque chapitre pour des informations détaillées et des exemples !

## Ressources supplémentaires

- [Laracasts](https://laracasts.com/series/laravel-8-from-scratch) : Une excellente ressource pour les screencasts et tutoriels vidéo Laravel.
- [ GRAFIKART Laravel 10 à](https://grafikart.fr/formations/laravel) : Découverte de Laravel 10 à Grafikart
- [Laravel News](https://laravel-news.com/) : Restez informé des dernières actualités, tutoriels et packages Laravel.
- [Laravel Podcast](https://www.laravelpodcast.com/) : Écoutez des discussions sur des sujets liés à Laravel.
- [Playlist Laravel](https://youtube.com/playlist?list=PLe30vg_FG4OTxKekbWLABcpstdeCDA4LQ&si=qwpSjOJUbgHR-Goa) : playlist Laravel
