# Salutem

## Installation
``` Shell
Composer install 
npm install
```

``` Shell
symfony serve
npm run watch
```

## Création d'un projet symfony

### Créer le projet 
``` Shell
synfony new salutem --full
``` 
OU
``` Shell

composer create-project symfony/website-skeleton salutem
``` 

Eventuellement modifier le fichier gitignore

## installerWebpack encore
https://symfony.com/doc/current/frontend/encore/simple-example.html
```shell
composer require symfony/webpack-encore-bundle
npm install
```
### Activer SASS
décommenter la ligne suivante du fichier webpack