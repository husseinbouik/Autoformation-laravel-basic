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

### Introduction à Laravel

### Structure des dossiers

### Le Routing

### L'ORM Eloquent

### Les Controllers

### Moteur de template Blade

### Valider les données

### Model binding

### Debugbar et IDE Helper

### Les formulaires

### Les Relation

### Authentification

### Système de fichiers

### Eloquent : Accesseurs et mutateurs

### Eloquent : Seed et Factory

### Front-end avec Vite

### Les composants blade

### Laravel Breeze

### Les Policy

### Le service provider

### Les évènements

### Notifications

### Internationalisation

### Les files d'attentes

### API Resource

### Tester avec Laravel

### Hébergement et déploiement

### Héberger sur un mutualisé via SSH (Infomaniak)

## Ressources 

- [Laracasts]([https://laracasts.com/](https://laracasts.com/series/laravel-8-from-scratch)) : Une excellente ressource pour les screencasts et tutoriels vidéo Laravel.
- [Laravel News](https://laravel-news.com/) : Restez informé des dernières actualités, tutoriels et packages Laravel.
- [Laravel Podcast](https://www.laravelpodcast.com/) : Écoutez des discussions sur des sujets liés à Laravel.

