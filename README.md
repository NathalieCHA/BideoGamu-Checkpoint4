# BideoGamu

## Presentation

Bienvenue sur le site Ressources Handicap Conseil composé en deux parties :
 - un site vitrine
 - un espace adminstrateur pour gérer les contenus

## Prépare le lancement

### Installation

1. Clone le projet
2. Run `composer install`
3. Run `yarn install`
4. Paramètre ton env local avec ton DATABASE_URL et MAILER_DSN
5. Crée la database RHC `php bin/console doctrine:database:create`
6. Crée les tables avec `php bin/console doctrine:migrations:migrate`
7. Lance les fixtures pour avoir de la données sous la dent `php bin/console doctrine:fixtures:load`


### C'est parti!
1. Lance ton serveur local `symfony server:start`

## Un espace admin pour desktop
   -> Identifiant : lovinggames@game.com
   -> Mot de passe : admin
- Pour paramétrer les contenus du site dans l'espace Contenu

## Construit grâce à

* [Symfony](https://github.com/symfony/symfony)
* [VichUploader](https://github.com/dustin10/VichUploaderBundle)

## Fait par

* [Nathalie](https://github.com/NathalieCHA)

