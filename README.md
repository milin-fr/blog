# Atelier

## Objectifs

- Intégrer le code HTML/CSS de l'intégrateur dans notre projet
- Continuer de structurer plus proprement nos données avec des classes
- Coder chaque étape dans une **branche spécifique**, puis **commiter**, puis **fusionner dans master** une fois l'étape terminée

## Rappels

- une classe contient des propriétés et des méthodes
- chaque propriété et méthode peut être publique (open bar) ou privée (uniquement pour la classe) selon son utilisation/but

## Code fourni

- intégration HTML/CSS
- nouveau fichier `inc/data.php` à utiliser à l'étape 4

## Etapes

### Etape 1 - Découper :scissors:

- créer une branche `cut-cut-cut` et se placer dedans
- à partir de l'intégration HTML/CSS fournie
- découper l'intégration en templates
    - au minimum, il y aura 3 templates :wink:
- dans `index.php`, si ce n'est pas déjà fait, inclure dans le bon ordre ces templates
    - ces inclusions devront **toujours** être à la fin du fichier (bonne pratique)
- la page d'accueil doit s'afficher correctement
- mettre en place l'intégration de la page "article"
- ajouter et commiter les modifications

### Etape 2 - Dynamiser :boom:

- se placer sur `master` et fusionner la branche `cut-cut-cut` dans master
- créer une branche `dynamiser` et se placer dedans
- on a déjà récupéré les articles pour la page d'accueil
    - => adapter la boucle sur les objets `Article` pour dynamiser la liste d'article sur la page d'accueil
- on a déjà récupéré l'objet `Article` pour la page d'un article
    - => adapter l'utilisation de l'objet `Article` pour dynamiser la page d'un article
- on veut dynamiser aussi les catégories (en haut et à droite)
    - ajouter une méthode dans la classe _Data_ retournant la liste de toutes les catégories
    - utiliser cette méthode pour récupérer la liste des catégories
    - parcourir la liste dans les templates
- on veut dynamiser aussi les auteurs (à droite)
    - ajouter une méthode dans la classe _Data_ retournant la liste de tous les auteurs
    - utiliser cette méthode pour récupérer la liste des auteurs
    - parcourir la liste dans la template
- ajouter et commiter les modifications

<details><summary>Exemple template auteurs</summary>

```html
<!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
<div class="card">
<h3 class="card-header">Auteurs</h3>
<ul class="list-group list-group-flush">
    <?php foreach ($authors as $authorId=>$authorName) : ?>
    <li class="list-group-item"><?= $authorName ?></li>
    <?php endforeach; ?>
</ul>
</div>
```

</details>

### Etape 3 - Liens internes :anchor:

- se placer sur `master` et fusionner la branche `dynamiser` dans master
- créer une branche `links` et se placer dedans
- dans l'entête :
  - définir le lien vers chaque page catégorie
  - l'URL ressemblera à `index.php?page=category&id=4` (4 pour la catégorie dont l'id est 4)
  - en profiter pour récupérer l'identifiant dans le code de la page
- dans la sidebar (à droite) :
  - définir le lien vers chaque page catégorie
  - l'URL ressemblera à `index.php?page=category&id=4` (4 pour la catégorie dont l'id est 4)
  - définir le lien vers chaque page auteur
  - l'URL ressemblera à `index.php?page=author&id=7` (7 pour la catégorie dont l'id est 7)
  - en profiter pour récupérer l'identifiant dans le code de la page
- vérifier que tous les liens fonctionnent bien
- ajouter et commiter les modifications

### Etape 4 - Classes Category & Author :sunglasses:

- se placer sur `master` et fusionner la branche `links` dans master
- créer une branche `classe-category-author` et se placer dedans
- on va créer une classe `Category`, pour structurer les données de chaque catégorie
- on va créer une classe `Author`, pour structurer les données de chaque auteur
- ces 2 classes ressemblent donc à la classe `Article` déjà créée
- le fichier `inc/data.php` contenant l'utilisation de ces 2 classes en fourni dans le dossier `etape4`
- écraser le fichier `inc/data.php` par celui fourni
- le nom de l'auteur et de la catégorie ont disparu sur la page d'accueil, ce n'est pas grave, on s'en occupera en _bonus_
- les données transmises aux templates sont différentes
  - en conséquence, modifier le code des templates
  - rappel : `$object->property`
- vérifier que toutes les pages sont toujours fonctionnelles
- ajouter et commiter les modifications

<details><summary>Indice(s)</summary>

- il faudra coder un ou des paramètre(s) optionnel(s) au constructeur afin de déterminer la valeur de la ou les propriété(s)

</details>

### Etape 5 - Page catégorie :doughnut:

- se placer sur `master` et fusionner la branche `classe-category-author` dans master
- créer une branche `page-category` et se placer dedans
- on veut afficher le nom de la catégorie dans un `h1`
  - appeler une méthode d'un objet de la classe _Data_ permettant de récupérer un objet `Category` à partir de son id
  - la méthode n'existe pas ? => alors il faut la créer :wink:
  - indice : cette méthode est similaire à la méthode `getArticle($id)`
- on veut afficher la liste de tous les articles pour cette catégorie
  - appeler une méthode d'un objet de la classe _Data_ permettant de récupérer un tableau d'objets `Article` à partir de l'id de la catégorie
  - la méthode n'existe pas ? => alors il faut la créer :wink:
  - indice : cette méthode est similaire à la méthode `getArticles()`
  - par contre il ne faudra pas retourner tous les articles, mais uniquement ceux qui ont l'id catégorie demandé
- modifier les templates pour afficher les données sur le site
- ajouter et commiter les modifications

<details><summary>Indices récupération des articles d'une catégorie</summary>

- on pourrait nommer la méthode : `getArticlesByCategoryId($categoryId)`
- la méthode renverrait un tableau d'objet `Article`

> par contre il ne faudra pas retourner tous les articles, mais uniquement ceux qui ont l'id catégorie demandé

- on peut créer un tableau vide, qu'on remplira des articles de la catégorie
- pour chaque article du site, si l'id de la catégorie correspond à l'id fourni en paramètre, alors ajouter l'article dans le tableau
- à la fin, retourner le tableau

</details>

### Etape 6 - Page auteur :icecream:

- se placer sur `master` et fusionner la branche `page-category` dans master
- créer une branche `page-author` et se placer dedans
- on veut afficher le nom de l'auteur dans un `h1`
  - appeler une méthode d'un objet de la classe _Data_ permettant de récupérer un objet `Author` à partir de son id
  - la méthode n'existe pas ? => alors il faut la créer :wink:
  - indice : cette méthode est similaire à la méthode `getArticle($id)`
- on veut afficher la liste de tous les articles de cet auteur
  - appeler une méthode d'un objet de la classe _Data_ permettant de récupérer un tableau d'objets `Article` à partir de l'id de l'auteur
  - la méthode n'existe pas ? => alors il faut la créer :wink:
  - indice : cette méthode est similaire à la méthode `getArticles()`
  - par contre il ne faudra pas retourner tous les articles, mais uniquement ceux qui ont l'id auteur demandé
- modifier les templates pour afficher les données sur le site
- ajouter et commiter les modifications

<details><summary>Indice</summary>

C'est comme l'étape précédente, mais avec les auteurs au lieu des catégories :wink:

</details>

## Bonus

<details><summary>En cliquant sur ce lien, je confirme avoir terminé l'atelier avant l'heure et je confirme souhaiter être confronter à une demande qui n'aura pas été vue en cours</summary>

### Bonus - Corriger les bugs :fearful:

- se placer sur `master` et fusionner la branche `page-author` dans master
- créer une branche `bugfix-author-category` et se placer dedans
- l'étape 3 a généré des _bugs_ sur la page d'accueil :
  - un numéro apparait en lieu et place de l'auteur :eyes:
  - un numéro apparait en lieu et place de la catégorie :eyes:
- ce ne sont pas vraiment des bugs, mais plutôt des _effets de bords_ (effets indésirables d'une modification du code)
- normalement, on dispose déjà d'un tableau des objets `Category` et d'un tableau des objets `Author`
- en index/clé de ces tableaux, c'est l'id correspondant
- en valeur des propriétés `author` & `category` des objets `Article`, on a l'id correspondant
- => utiliser l'id de l'objet `Article` pour stipuler à quelle index/clé on souhaite accéder dans le tableau d'objets `Category` / `Author`
- ajouter et commiter les modifications

<details><summary>Indice</summary>

- la clé d'un tableau peut être écrite "en dur" : `$tableau[4]`
- elle peut aussi être définie grâce à une variable : `$tableau[ $id ]`
- et donc elle peut aussi être définie grâce à une propriété d'un objet : `$tableau[ $object->property ]`

</details>

### Mega Bonus - Class App :bulb:

- se placer sur `master` et fusionner la branche `bugfix-author-category` dans master
- créer une branche `classe-app` et se placer dedans
- il nous reste du code "procédural" (c'est-à-dire qui n'est pas dans un objet) dans `index.php`
- on va donc créer une classe `App` qui va reprendre ce qu'il y a dans `index.php`

#### Déclarer la classe

- créer une classe `App`
- déclarer les propriétés :
  - `data` qui contient un objet de la classe _Data_
  - `templateName` qui contient le nom de la template à afficher
- déclarer un constructeur
  - qui s'occupera d'initialiser les propriétés
- déclarer une méthode `run()`
  - qui s'occupera d'afficher la bonne page selon le paramètre d'URL `"page"`

#### Transferts

- dans le code de `index.php`, il ne doit plus rester que :
  - les inclusions des classes
  - la création d'une instance de la classe _App_
  - l'appel à la méthode `run()`
- coder le constructeur de _App_ afin qu'il initialise les propriétés
- coder la méthode `run` de _App_ afin qu'elle gère le code de chaque page du site
- toutes les pages doivent fonctionner comme avant

#### Décomposer

- dans la méthode `run()` de la classe _App_, il y a actuellement le code de TOUTES les pages
- on va décomposer :
  - créer une méthode par "page"
  - y placer la code de chaque page
  - dans la méthode `run`, appeler la bonne méthode selon la page à afficher

#### Fini !

- ajouter et commiter les modifications :tada:

### Bonus _je m'occupe_ - Améliorations

- se placer sur `master` et fusionner la branche `classe-app` dans master
- créer une branche `mes-ameliorations-a-moi` et se placer dedans
- il y a encore pleins de choses qui pourraient être améliorées
- on te laisse effectuer ces améliorations :wink:
- ajouter et commiter les modifications

</details>
