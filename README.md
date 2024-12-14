## Fonctionnement détaillé

### Gestion des livres
- La page d'accueil affiche une liste de tous les livres disponibles.
- Chaque livre affiche son titre, l'auteur, le genre et la disponibilité.
- Les administrateurs peuvent ajouter de nouveaux livres via le formulaire "Ajouter un livre".
- La modification et la suppression des livres sont réservées aux administrateurs.

### Gestion des auteurs
- La page des auteurs affiche une liste de tous les auteurs enregistrés.
- Chaque auteur a une page de détails montrant sa biographie et la liste de ses livres.
- Les administrateurs peuvent ajouter, modifier ou supprimer des auteurs.

### Système d'emprunt
- Les utilisateurs peuvent voir leurs emprunts en cours et l'historique dans leur profil.
- Les administrateurs peuvent gérer tous les emprunts et effectuer des retours.

### Gestion des utilisateurs
- Les visiteurs peuvent s'inscrire pour créer un compte utilisateur.
- Les administrateurs ont accès à une interface de gestion des utilisateurs pour modifier les rôles.

## Technologies utilisées

- **Symfony 6.x** : Framework PHP pour le backend
- **Doctrine ORM** : Pour la gestion de la base de données
- **Twig** : Moteur de templates pour les vues
- **Bootstrap 5** : Framework CSS pour le design responsive
- **MySQL** : Système de gestion de base de données

## Déploiement

Pour déployer l'application en production, suivez ces étapes :

1. Configurez votre serveur web (Apache ou Nginx) pour pointer vers le dossier `public/` de l'application.

2. Assurez-vous que PHP 8.0 ou supérieur est installé sur votre serveur.

3. Installez Composer sur votre serveur si ce n'est pas déjà fait.

4. Clonez le dépôt de l'application sur votre serveur.

5. Installez les dépendances en exécutant :

