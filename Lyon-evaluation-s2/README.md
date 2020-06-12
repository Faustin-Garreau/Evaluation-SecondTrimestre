# Evaluation du 2eme semestre

**Objectif**: Savoir reproduire tout les enseignements vù au cours de l'année.

Pour cette évaluation, vous allez créer un espace d'aministration qui permet de gérer toutes les infos de la page principale.

Le site ne contient qu'une page de présentation qui est votre présentation a vous. (portfolio)

Sur cette page on retrouvera:

- une description de vous
- une description de vos compétences
- une présentation de vos projets
- un espace de contact 

Le but est que les informations proposées sur cette page soient modifiable à partir de votre espace d'admin:

- pouvoir changer vos informations sur vous
- changer les valeurs de vos compétences ou en ajouter/supprimer
- changer les valeurs de vos projets ou en ajouter/supprimer
- ajouter/supprimer/modifier un champs de contact

> BONUS: pouvoir changer le thème du site (couleurs, polices ...)

> BONUS 2: Système de "TAG" pour les projets

## Les attentes

Le but de cette eval étant de mettre en application tout les concepts vu dans l'année, vous devrez:

- Utiliser l'architecture **MVC**
- N'utiliser que des **classes** et **objets**
- Faire de l'héritage (au moins pour les managers et controllers)
- Le choix d'un framwork css est libre

> ATTENTION: Le rendu se fait sur une branche à votre nom, chaque étape doit être correctement versionnée (commit)

## La réalisation

Pour vous aider dans votre réalisation, je vous rappel de prendre le temps de conceptualiser l'application:

- combien de tables de base de données vais-je avoir besoin ?
- quelles sont les informations que j'utilise pour me presenter ?
- quelles sont les informations que j'utilise pour décrire mes projets ?
- De quelles entitées vais-je avoir besoin ?
- De quelles "managers" vais-je avoir besoin ?
- De quelles "controllers" vais-je avoir besoin ?
- Quelles sont les routes pour acceder aux pages ?

### Exemple de marche à suivre

1. Créer la base de données
2. Créer la structure de fichier
3. S'occuper de l'autoloader
4. Créer le router
5. Créer les models
    - entitées
    - managers
6. Créer les controllers
7. Creer les vues

> Ce n'est qu'une marche à suivre parmis d'autre, libre à vous de faire comme vous voulez

Voici des exemples de portfolio: 
[exemple 1](https://blackrockdigital.github.io/startbootstrap-freelancer/)

[exemple 2](https://blackrockdigital.github.io/startbootstrap-creative/)

[exemple 3](https://blackrockdigital.github.io/startbootstrap-agency/)
