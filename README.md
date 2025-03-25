# Portfolio WordPress avec Bedrock

Ce projet est un portfolio personnel réalisé avec **WordPress** en utilisant **Roots/Bedrock** pour une meilleure structuration et gestion des dépendances. Il inclut un thème enfant, un Custom Post Type (CPT) pour les réalisations, des champs personnalisés avec **Advanced Custom Fields (ACF)**, et une homepage personnalisée affichant les meilleures réalisations.

## Étapes réalisées

1. **Installation et Configuration de Bedrock**
   - Installation de WordPress via Bedrock avec Composer.
   - Configuration de la base de données et des variables d'environnement dans le fichier `.env`.

2. **Gestion des Thèmes et Plugins**
   - Installation du thème parent `hello-elementor` via Composer.
   - Création et activation d’un thème enfant basé sur `hello-elementor`.

3. **Création du Custom Post Type (CPT)**
   - Ajout d’un CPT nommé `portfolio` avec support des titres, éditeurs, images mises en avant, et catégories personnalisées.
   - Configuration des permaliens personnalisés pour les réalisations.

4. **Ajout des Champs Personnalisés avec ACF**
   - Installation et activation du plugin ACF via Composer.
   - Création d’un groupe de champs pour le CPT `Portfolio`, incluant :
     - Client (Texte)
     - Date de réalisation (Date)
     - Lien du projet (URL)
     - Galerie d’images (Image)

5. **Affichage des Réalisations**
   - Création de templates personnalisés :
     - `single-portfolio.php` pour les réalisations individuelles.
     - `archive-portfolio.php` pour afficher toutes les réalisations sous forme de grille.
   - Utilisation des champs ACF pour enrichir l’affichage des réalisations.

6. **Création de la Homepage**
   - Configuration d’une page d’accueil statique présentant l’étudiant et ses compétences.
   - Affichage dynamique des trois meilleures réalisations via un champ ACF (`meilleure_realisation`).

7. **Intégration de Bootstrap**
   - Inclusion de Bootstrap via CDN pour améliorer le style et la responsivité.
   - Modification du template `front-page.php` pour utiliser les classes Bootstrap.

8. **Gestion du Projet**
   - Versionnage du projet avec Git et hébergement sur un repository GitHub.

## Difficultés rencontrées

- **Configuration initiale de Bedrock** : La mise en place de Bedrock sous Windows a nécessité xampp.

## Comment installer et lancer le projet

Suivez ces étapes pour installer et lancer le projet localement sur votre machine.

### Prérequis

- **PHP** (version 7.4 ou supérieure)
- **MySQL** (ou MariaDB)
- **Composer** installé globalement
- Un serveur local comme **Laragon**, **XAMPP**, ou **WAMP**

### Instructions

1. **Cloner le repository**
   ```bash
   git clone https://github.com/Blazes35/mon-portfolio.git
   cd mon-portfolio
   ```

2. **Installer les dépendances**
   ```bash
   composer install
   ```

3. **Configurer la base de données**
   - Créez une nouvelle base de données MySQL (ex. `mon_portfolio`).
   - Copiez le fichier `.env.example` en `.env` et modifiez-le avec vos informations de base de données :
     ```
     DB_NAME='mon_portfolio'
     DB_USER='votre_utilisateur'
     DB_PASSWORD='votre_mot_de_passe'
     DB_HOST='localhost'
     ```

4. **Importer la base de données**
   - Si un fichier `.sql` est fourni, importez-le dans votre base de données via phpMyAdmin ou la ligne de commande :
     ```bash
     mysql -u votre_utilisateur -p mon_portfolio < chemin/vers/le/fichier.sql
     ```

5. **Configurer le serveur web**
   - Pointez votre serveur local vers le dossier `web` du projet.
   - Assurez-vous que le site est accessible via une URL comme `http://localhost`.

6. **Accéder au site**
    - Ouvrez votre navigateur et allez à `http://mlocalhost` (ou l’URL configurée).
    - Connectez-vous à l’administration WordPress avec
      - identifiant: `root`
      - mot de passe: `root`

### Notes supplémentaires
- Si vous rencontrez des problèmes avec les permaliens, allez dans **Réglages > Permaliens** et cliquez sur "Enregistrer les modifications".
- Assurez-vous que les plugins nécessaires (comme ACF) sont activés dans l’administration WordPress.

---

Merci d’avoir exploré ce projet ! N’hésitez pas à me contacter pour toute question ou suggestion d’amélioration.

--- 

Ce fichier README.md répond à votre demande en incluant une explication claire des étapes réalisées, les difficultés rencontrées, et des instructions détaillées pour installer et lancer le projet. Vous pouvez l’ajouter directement à la racine de votre projet.