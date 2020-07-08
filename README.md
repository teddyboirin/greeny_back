# Partie Back-end du projet de fin d'année 

# Lien de l'API 

https://greeny.samirchalal.fr/api

# Présentation du projet 

Notre projet est une plateforme qui va permettre aux gens de devenir plus éco-responsable et réduire leur empreinte carbone. Comment ? En leur proposant des défis variées chaque jour de différentes catégories pour les aider à faire des gestes écolo dans leur quotidien.

# Choix Techniques :

Serveur : Apache

SGBD : MySQL

Composants : Doctrine / ApiPlatform

# Rôles

Développeur Back-end : Chalal Samir & Teddy Boirin


# Modèle Physique des Données 

![Image](https://github.com/teddyboirin/greeny_back/blob/master/mpd.png)

# Texte explicatif 

La base de données contient 3 entités principales :

User : cette entité correspond aux utilisateurs du site que devront s'inscrire et être connecté pour pouvoir y accèder car ses informations sont réservées aux membres. Cette protection de donnée est gérer par un token JWT qui permet d'authentifier un utilisateur.
Defis : cette entité correspond aux défis présents sur le site.
Association : Cette entité correspond à la liste des associations présentes sur le site.

### Gestion de l'authentification 
Pour ce faire, nous avons suivi la documentation Symfony concernant l'authentification puis comme la documentation n'est pas faite pour être utilisée avec un API, nous avons du trouver une autre documentation pour gérer l'authentification via une API. 
C'est ainsi, qu'un repo Jexit a été trouvé afin de généré un token lorsque l'authentification d'un utilisateur est faite. Pour des raison de sécurité, ce token est valable 1h une fois l'utilisateur connecté.   


### Pourquoi avoir choisi JWT ?
JWT est le système de token la plus répandue sur le web et donc la plus sure. Son système de cléf privée et public permets d'améliorer la protection des données.

### Et les autres tables ?
Les autres tables sont des tables normales où les données sont entrées via une requête POST. Cependant, la table user possède une relation avec la table défis. Ainsi, dans la table users, nous avons un tableau défis, permettant de savoir quels sont les défis que l'utilisateur aura placé en favoris sur son compte personnel.
