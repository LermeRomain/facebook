# Evalutation Romain Lerme - Sophia Hmamouche

Fakebook

## Démarrer le projet

- npm install
- composer install
- création base de donnée (.env si besoin de modif (log, port ...))
    - commande 1 : php bin/console doctrine:database:create
    - commande 2 : php bin/console make:migration
    - commande 3 : php bin/console doctrine:migrations:migrate
- symfony server:start.


## Fonctionalité disponible

- Création de compte
- Connexion
- Création de posts avec ajout d'image
- Bibliothèque d'images liée au compte (Ajout, suppression et affichage de l'image)
- Modifications des informations du compte
- Modification de l'image de profil
- Recherche d'utilisateurs
- Consultations du profil de tous les utilisateurs et affichage de leurs post
- Page de menu qui affiche le feed, tous les post dans l'ordre antéchronologique

### Connection

Créer vous un compte la connextion est automatique (attention a bien mettre une IMG)


