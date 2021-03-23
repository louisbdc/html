# Avant installation :  

```bash
php -v
```

Il faut avoir une version supérieur ou égale à 7.0 !

# Installation :   

Suivant le php que tu possède tu peux rempler "7.3" par 7.0 / 7.1 / 7.2
```bash
sudo apt install php7.3-mbstring 
```
```bash
./composer.phar install
```

# Lancement :  

```bash
php -S localhost:5000 index.php
```

# Hébergement :  


Le projet est hébergé en ligne à l'adresse suivante : https://louis-bac-php.herokuapp.com/
Si tu modifie le code et que tu souhaite envoyer une nouvelle version sur ce lien c'est simple.

Il faudra que "git" soit installé sur ta machine.

Tu télécharges le projet : 

```bash
git clone git@github.com:EArminjon/louis-bac-php.git
```

Tu vas dans le dossier, tu fais des modifications.
Ensuite tu fais 

```bash
git add --all && git commit -m "louis message par defaut" && git push origin master 
```

Au bout de quelques minutes la version en ligne sera corrigé avec ce que tu as envoyé.

# Quelques informations :  

- .gitignore est un fichier qui sert à éviter d'envoyer certains fichiers sur github (genre les sauvegardes, les trucs de test...)
- .htaccess est un fichier utilisé par le server HTTP (apache). Il sert à mettre en place plusieurs règles de sécurité.
- composer.json est un fichier où je déclare les dépendances du projet ainsi que quelques options.
- composer.lock est un fichier générer par l'instalation (composer.phar install)
- favicon.ico est l'icone du site visible sur l'onglet dans un navigateur.
- serviceAccountKey.json est un fichier d'authentification pourla base de donnée (Firebase).
- composer.phar est un programme qui va gérer l'installation.
- README.md est le fichier que tu lis en ce moment même :).
- vendor est un dossier qui va apparaitre après installation, il contient les dépendances du projet.
- src est un dossier qui contient les sources du projet.

# Autre :  


https://getbootstrap.com/docs/4.3/components/
