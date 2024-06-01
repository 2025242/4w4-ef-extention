# epreuve finale - Explorez l'Inconnu 

## Auteur
Salma Bourakkadi
##	Lien vers votre site sur l’hébergeur « WHC »
[Lien vers l’hébergeur « WHC »](https://gftnth00.mywhc.ca/tim11/)

## GitHub Page
[Lien vers la GitHub Page](https://2025242.github.io/4w4-2024/)

# Objectifs
Utilisez la structure de thème de votre TP2 pour réaliser le développement de l’épreuve finale.

## Ce que vous devez réaliser

### 1. Page de Pays
Créez une page décrivant par pays les plus belles destinations de voyages. La page sera créée à partir du modèle `template-pays.php`.

### 2. Extension basée sur API REST de WordPress
Développez une extension qui génère un menu constitué des noms des pays et qui, selon le pays sélectionné, affiche l’ensemble des destinations de ce pays. L’extension sera intégrée dans le modèle de page à partir d’un shortcode.

**Liste des pays :**
- France
- États-Unis
- Canada
- Argentine
- Chili
- Belgique
- Maroc
- Mexique
- Japon
- Italie
- Islande
- Chine
- Grèce
- Suisse

## Barème de Correction sur 20 Points

### 1. Menu Principal (1 point)
- Le choix "Pays" est ajouté dans le menu principal.

### 2. Page Pays (6 points)
- La page "Pays" contient :
  - Un titre : "Les plus beaux pays"
  - Une introduction
  - Une galerie d’images
  - Deux vagues : Une séparant la section intro et la section REST-API, et une autre séparant la section REST-API et le pied de page

### 3. Section REST API (10 points)
- Un menu affichant l’ensemble des pays comme sur la maquette.
- Le contenu par défaut est constitué des destinations de la France.
- En cliquant sur un bouton « Pays », les nouvelles destinations s’affichent.
- Le format d’affichage est le même que celui décrit sur les maquettes.
- L’image associée à une destination est une image mise en avant à partir de l’éditeur de WordPress.
- Si la destination ne contient pas d’image mise-en-avant, une image temporaire « placeholder » accessible à partir de cette adresse : [https://via.placeholder.com/150](https://via.placeholder.com/150) est affichée.
- Les destinations proviennent de votre base de données se trouvant sur votre compte WHC.CA.

### 4. GitHub (3 points)
- Vous devez créer une branche EF sur votre dépôt de thème.
- Vous devez créer un nouveau dépôt qui contiendra l’extension API-REST « Pays ».
- Étalement des commits pendant les trois heures de l'EF (pas dans les 5 dernières minutes de l’EF).
- Chaque commit devrait contenir un état fonctionnel de votre développement.
- Chaque commit est commenté et préfixé par « ef-vos initial » et un commentaire décrivant la modification.
- Un `README.md` contenant une description de l’épreuve et des modifications apportées, le nom de l’auteur, et un lien vers votre site distant WHC.CA.
- Le lien vers votre dépôt GitHub est indiqué dans la section footer de votre site.

---

# README.md

## Description de l'Épreuve

Cette épreuve finale consiste à développer une page décrivant les plus belles destinations de voyages par pays, ainsi qu'une extension basée sur l'API REST de WordPress pour afficher et filtrer les destinations par pays.

## Modifications Apportées

### Template `template-pays.php`

1. **Séparation des Sections**
    - Séparation du contenu général de la page et du menu des pays en deux sections distinctes pour une meilleure organisation.

2. **Ajout d'une Vague**
    - Ajout d'une vague entre les sections de contenu général et le menu des pays pour une esthétique améliorée.

3. **Stylisation des Sections**
    - Ajout de styles CSS spécifiques pour chaque section afin de contrôler leur apparence et leur comportement, surtout en mode responsive.

4. **Ajout d'un Gabarit pour la Vague**
    - Création d'un fichier `gabarits/vague.php` pour inclure le SVG de la vague, permettant une réutilisation facile dans différentes parties du site.

### Extension API REST

- **Fonctionnalité du Menu**
    - Génération d'un menu constitué des noms des pays.
    - Affichage des destinations selon le pays sélectionné.

- **Comportement par Défaut**
    - Le contenu par défaut affiche les destinations de la France.

- **Affichage des Destinations**
    - Les destinations s'affichent au format décrit dans les maquettes.
    - Utilisation des images mises en avant des articles WordPress.
    - Affichage d'une image "placeholder" si aucune image mise en avant n'est disponible.

### GitHub

- **Branche EF**
    - Création d'une branche EF sur le dépôt de thème.
- **Nouveau Dépôt**
    - Création d'un nouveau dépôt pour l'extension API-REST « Pays ».
- **Commits Étalés**
    - Étalement des commits pendant les trois heures de l'EF.
    - Chaque commit est commenté et préfixé par « ef-vos initial ».
- **README.md**
    - Inclusion d'un `README.md` contenant une description de l’épreuve, des modifications apportées, le nom de l’auteur et un lien vers le site distant WHC.CA.
- **Lien GitHub**
    - Lien vers le dépôt GitHub ajouté dans le footer du site.

