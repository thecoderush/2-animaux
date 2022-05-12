# Créer 4 applications avec Symfony v4 
**(évolution progressive)**
by Matthieu GASTON de H2PROG (UDEMY)

### About this course

Symfony v4/v5 par la pratique, PHP, CRUD, Doctrine, Fixtures, Authentification, Faker, Pagination, Upload d'image, MVC..


### Description

**Correctif apportés pour fonctionner sur la version 5 de Symfony !**


**Symfony de A à Z dans cette formation axée sur la pratique contenant 4 applications différentes :**

Avec ce cours, vous apprendrez les bases du Framework PHP symfony au travers de 4 applications que nous allons créer.

C'est l'un des "cours de fin de parcours" que je propose au sujet du cursus PHP  qui contient 6 autres cours permettant d'apprendre ce langage, les bases de données, l'architecture MVC ....


**Un niveau Intermédiaire :**

Même si j'explique tout ce qui est réalisé, il vous faudra disposer de bonnes bases en programmation PHP pour suivre ce cours dans de bonne conditions !

Je ne recommande pas à un débutant en programmation de démarrer son apprentissage par un Framework (en particulier Symfony).

La progression normale d'un apprenti développeur est la suivante :
Algorithmique -> langage de programmation -> framework

*Le niveau est cependant "Débutant" en ce qui concerne le framework Symfony.*


**La première application...**

... contiendra toutes les bases de routage et de structuration d'une application Symfony. Elle permettra de revoir les notions fondamentales de PHP (tableaux associatif, POO, et MVC).

Nous créerons des pages liées à des personnages et des armes.


**La deuxième application...**

... permettra de mettre en place des pages utilisant des données stockées en base de données et nous utiliserons la représentation MCD pour nous guider. Nous mettrons en place l'ensemble des relations existantes entre les entités.

Nous créerons des pages liées à des animaux et à leur famille...


**La troisième application...**

... permettra de mettre en place une partie administration, un CRUD (avec Upload d'image), l'authentification des utilisateurs... 

Nous créerons des pages liées à des aliments et à leurs apports nutritionnels.
Cette application pourrait être le point de départ de plusieurs sites internet.


**La quatrième application...**

... permettra de revoir tous ce qui a été fait avant (CRUD, admin, authentification ...), et de rajouter de nouvelles fonctionnalités telles que la pagination ou les filtres.

Nous créerons des pages liées à des voitures et à leur modèle.
Nous verrons enfin comment mettre en ligne l'application via un hébergeur (payant) en FTP.


**L'objectif...**

Avec plus de 10 heures d'enregistrements et des quizz, vous disposerez du nécessaire pour développer sereinement des applications et sites internet avec le framework Symfony.

A l'issue de cette formation  vous pourrez rajouter cette nouvelle compétence sur votre CV.



**What you’ll learn**

*    Développer des applications Symfony
*    Utiliser le moteur de template Twig
*    Utiliser l'ORM doctrine
*    Créer une partie administration, un CRUD et une authentification d'utilisateur (composant Security)
*    Utiliser des services Symfony supplémentaires (pagination, upload d'images, Fixtures et Faker ...)
*    Gérer les erreurs et les exceptions
*    Mettre en ligne son application Symfony en FTP

**Are there any course requirements or prerequisites?**

*    Avoir de bonnes connaissances en PHP (+ connaître bootstrap, HTML, CSS)
*    Il est recommandé de connaître l'architecture MVC

**Who this course is for:**

*    Développeur web
*    Etudiant en développement
*    Reconversion professionnelle


### Course content

**Section 1: Introduction**
**Section 2: Les préparatifs**
**Section 3: La première application**
**Section 4: Deuxième application (mise en place d'une BD)**	
**Section 5: Troisième application: BD + administration**
**Section 6: Authentification et gestion de rôles**
**Section 7: 4ème application (BD, administration, rôles...)**
**Section 8: Bonus: continuer son apprentissage !**


#### Section 1: Introduction
1.1. Présentation du cours
1.2. Qui suis-je ?
1.3. Les réalisations
1.4. Le parcours de formation
1.5. Conseils pour suivre la formation
	
#### Section 2: Les préparatifs
2.6. Logiciels
2.7. Visual Studio Code
2.8. Xampp
2.9. Symfony
2.10. Plugins
2.11. Installation de Symfony, Composer et GIT

#### Section 3: La première application
3.12. Présentation et objectifs du module
3.13. Création du projet
3.14. Architecture MVC et Symfony
3.15. Première page
3.16. Twig - Les templates
3.17. Twig et Contrôleur
3.18. Twig et les routes - le menu
3.19. Fichier "Client": images et CSS
3.20. Lister des personnages
3.21. Passage en POO
3.22. Méthode GET
3.23. Exercice: les armes
	

#### Section 4: Deuxième application (mise en place d'une BD)	
4.24. Présentation et objectifs du module
4.25. Initialisation du projet
4.26. Création de la BD (Doctrine)
4.27. Insertion des données (Fixtures)
4.28. Page d'accueil (Routes)
4.29. Lister les animaux (Repository)
4.30. Modification d'un entité
4.31. La page d'un animal
4.32. Famille : Relation 1.1 - 1.n
4.33. Famille : Affichage
4.34. Famille : lister les animaux
4.35. Continent : Relation 1.n - 1.n
4.36. Lister les continents
4.37. La page d'un continent et les routes
4.38. Personnes - Relation 1.n - 1.n avec propriété
4.39. Affichage des personnes et des animaux


#### Section 5: Troisième application: BD + administration

#### Section 6: Authentification et gestion de rôles

#### Section 7: 4ème application (BD, administration, rôles...)

#### Section 8: Bonus: continuer son apprentissage !

--- 

##### Section 1: Introduction

##### Section 2: Les préparatifs
##### 	2.6. Logiciels

#### Module 1: Installation

Logiciels et outils
*    Visual Studio Code
*    Xampp
*    Chrome
*    Framework Symfony

#####	2.7. Visual Studio Code
#####	2.8. Xampp    	

[How to Install XAMPP on Debian 10](https://vitux.com/xampp_debian/)

1. Download XAMPP package. version: XAMPP pour Linux 8.1.5 (PHP 8.1.5)
2. Make the installation package executable:

	$ cd ~/Downloads
	$ chmod 755 [package-name]
	$ ls -l

3. Launch the Setup Wizard:
 
	$ sudo ./[package-name]
	 
	XAMPP installed directory: to /opt/lampp

4. Launch XAMPP through the Terminal:
	
	$ sudo /opt/lampp/lampp start

Please note that you you have to start XAMPP manually every time you reboot your system.

5. Verify XAMPP installation: http://localhost
   Verify installation of phpMyAdmin: http://localhost/phpmyadmin

---
**Uninstall XAMPP**
In case you want to uninstall and completely remove XAMPP from your system:
		
	$ cd /opt/lampp
	$ sudo ./uninstall

Now in order to remove the XAMPP files and directories too:
	
	$ sudo rm -r /opt/lampp
---

Once XAMPP is installed Run the Apache and MySQL server.
Then open: http://localhost and http://localhost/phpmyadmin


Check installed PHP version:

	$ php -v 

	PHP 7.4.28 (cli)

#####	2.9. Symfony

Installation de Symfony et des composants nécessaires:
* Installation de "composer": https://getcomposer.org/download/
Cet outil permet d'installer des composants et d'avoir des fonctionnalités supplémentaires en ligne de commande.
* Installation de "Symfony": https://symfony.com/download
* Installation de "GIT":
Si vous rencontrez un problème lors de l'utilisation de Symfony (causé par l'absence de GIT) il vous faudra l'installer.

##### [Comment installer Composer (May 28, 2020)](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-20-04-fr)
1. Installer PHP et les dépendances supplémentaires
   
    Tout d'abord, mettez à jour le cache du gestionnaire de paquets en exécutant:

		$ sudo apt update
    
	Ensuite, exécutez la commande suivante pour installer les paquets requis:
	
		$ sudo apt install php-cli unzip

2. Téléchargement et installation de Composer
    
	Assurez-vous que vous êtes dans votre répertoire d'origine, puis récupérez l'installateur en utilisant curl:
    	
		$ cd ~
    	$ curl -sS https://getcomposer.org/installer -o composer-setup.php
  
    Ensuite, nous allons vérifier que l’installateur téléchargé correspond au hachage SHA-384 pour le dernier installateur trouvé sur la page des clés publiques/signatures de Composer. Pour faciliter l’étape de vérification, vous pouvez utiliser la commande suivante pour obtenir par programmation le dernier hachage de la page de Composer et le stocker dans une variable shell : 

    	$ HASH=`curl -sS https://composer.github.io/installer.sig`
		$ echo $HASH

	Exécutez maintenant le code PHP suivant tel que fourni dans la page de téléchargement de Composer pour vérifier que le script d’installation peut être exécuté en toute sécurité :

		$ php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
	
    Pour installer Composer globalement, utilisez la commande suivante qui téléchargera et installera Composer sous la forme d’une commande système nommée composer, sous /usr/local/bin :
    	
		$ sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
    	 	
    Pour tester votre installation, exécutez :
    	
		$ composer


https://getcomposer.org/download/ Remove the installer composer-setup.php

##### [Installing & Setting up the Symfony Framework Version: 5.4](https://symfony.com/doc/5.4/setup.html#technical-requirements)
Visit **Symfony Documentation**, go the **Getting Started** chapter, then **Setup / Installation** part.

1. Technical Requirements

Before creating your first Symfony application you must:

Install PHP 7.2.5 or higher and these PHP extensions (which are installed and enabled by default in most PHP 7 installations): **Ctype**, **iconv**, **JSON**, **PCRE**, **Session**, **SimpleXML**, and **Tokenizer**;
    Install **Composer**, which is used to install PHP packages.

Optionally, you can also **install Symfony CLI**. This creates a binary called symfony that provides all the tools you need to develop and run your Symfony application locally.

The symfony binary also provides a tool to check if your computer meets all requirements. Open your console terminal and run this command:

	$ symfony check:requirements

##### Install "php-ctype" package 
	$ sudo apt update 
	$ sudo apt install -y php-ctype
	
##### Install "php-iconv" package 
 	$ sudo apt update 
 	$ sudo apt install -y php-iconv	

##### [Install Symfony CLI](https://symfony.com/download)
	$ echo 'deb \[trusted=yes\] https://repo.symfony.com/apt/ /' | sudo tee /etc/apt/sources.list.d/symfony-cli.list
	$ sudo apt update
	$ sudo apt install symfony-cli

	$ symfony check:requirements
	

	Symfony Requirements Checker
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	> PHP is using the following php.ini file:
	/etc/php/7.4/cli/php.ini

	> Checking Symfony requirements:

	.....E...WW...W.........W

	
	 [ERROR] 
	 Your system is not ready to run Symfony projects 
	

	Fix the following mandatory requirements
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	 * simplexml_import_dom() must be available
	   > Install and enable the SimpleXML extension.


	Optional recommendations to improve your setup
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	 * PHP-DOM and PHP-XML modules should be installed
	   > Install and enable the PHP-DOM and the PHP-XML modules.

	 * mb_strlen() should be available
	   > Install and enable the mbstring extension.

	 * intl extension should be available
	   > Install and enable the intl extension (used for validators).

	 * PDO should have some drivers installed (currently available: none)
	   > Install PDO drivers (mandatory for Doctrine).



##### Install "php-simplexml" extension package 
 	$ sudo apt update 
 	$ sudo apt install -y php-simplexml

##### Install "php-dom" module Package 
 	$ sudo apt update 
 	$ sudo apt install -y php-dom

##### Install "php-xml" 
 	$ sudo apt update 
	$ sudo apt install -y php-xml
	
##### Install "php-mbstring"
	$ sudo apt install -y php-mbstring
	
##### Install "intl" extension
	$ sudo apt install -y php-intl

##### Install "php-pdo"
	$ sudo apt install -y php-pdo

Note: You can grouping terminal commands.
Example:
	
	$ sudo apt install php php-cli php-fpm php-json php-pdo php-mysql php-zip php-gd  php-mbstring php-curl php-xml php-pear 
	
Check requirements again:

	$ symfony check:requirements

	Symfony Requirements Checker
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	> PHP is using the following php.ini file:
	/etc/php/7.4/cli/php.ini

	> Checking Symfony requirements:

	............................W

	
	 [OK]
	 Your system is ready to run Symfony projects 
                                              
#####	2.10. VSCode Plugins

VSCode Plugin installed:
* PHP Intelephense
* PHP Namespace Resolver
* Symfony for VSCode
* Twig Language 2

Modify VSCode parameters:
Go to File/Preferences/settings, search input: json, open **settings.json** link, then add these two lines of code:
	
	"php.suggest.basic": false,  
	"editor.quickSuggestions": {"comments": true } 
	
* First line disable basic PHP suggestions for better Symfony functionalities suggestions and autocompletions	
* second line enable Comments autocompletion because we will use the annotations system

Note: When adding these lines don't forget to put a new comma after the default pre-written lines.

#### Section 3: La première application
##### 3.12. Présentation et objectifs du module
	
#### Module 2: Notre première application
(cf. Screenshots)

#####3.13. Création du projet
(cf. Screenshots)

	$ symfony new --full [project-name]
	$ symfony new --full 1-persos
	
	[WARNING] The --full flag is deprecated, use --webapp instead. 

	[OK] Your project is now ready in /home/thecoderush/Documents/Udemy/creer-4apps-Sf4/1-persos

##### 3.14. Architecture MVC et Symfony
(cf. Screenshots)	
		
#####    3.15. Première page
(cf. Screenshots)
	$ symfony server:start

	[OK] Web server listening                                                      
      The Web server is using PHP CLI 7.4.28                                    
      http://127.0.0.1:8000                         
	
Symfony version: 5.4.7

	$ php bin/console make:controller 

you can use also the symfony CLI:

	$ symfony console make:controller


Note: If you want to list all available commands

	$ symfony console list

	assets:
	...
	cache:
	...
	config:
	...
	dbal:
	...
	debug:
	...
	doctrine:
	...
	lint:
	...
	make:
	...
	router:
	...
	security:
	...
	server:
	...
	translation:

Create a new controller class:

	$ symfony console make:controller [controller-name]
	$ symfony console make:controller PersonnageController

	 created: src/Controller/PersonnageController.php
	 created: templates/personnage/index.html.twig

	
	  Success! 
	

	 Next: Open your new controller class and add some pages!
	 
http://127.0.0.1:8000/personnage

Creating two routes and two web pages
http://127.0.0.1:8000
http://127.0.0.1:8000/persos


#####    3.16. Twig - Les templates
(cf. Screenshots)

Afficher une variable: 
	{{ variable }}

Boucle for:
	{% for i in 0..10 %}
		{{ i }}
	{% endfor %}

"Les informations seront transmises par les 'contrôleurs' et nous les enverrons sous forme de tableaux associatifs qui seront ensuite utilisables comme des objets Javascript dans le cadre de nos fichiers Twig."

"Enfin, Twig met à disposition des fonctions supplémentaires nottamment pour réaliser des formattages."

[Twig documentation](https://twig.symfony.com/)

"Les 'Filters' pour réaliser des formattages sur nos variables (ex: format_date()), des 'Functions' pour par exemple le fait d'inclure d'autres fichiers (ex: include()), utiliser des fonctions random() etc.."

!Important: Pour être plus précis : Ce n'est en réalité pas un "include" qui est fait mais un "extends". Cela respecte le principe de l'héritage.

Si on prend l'exemple du "block Title" contenant "welcome" dans le fichier "base.html.twig", celui-ci sera remplacé par le contenu de la balise titre s'il existe dans l'autre fichier (sinon il reste à "welcome").

"Note: On peut nous-même déclarer des blocks à l'intérieur de notre template global (base.html.twig). Si par exemple je definis un nouveau block que je vais appeler "monTitre", et que je dis que ce titre là je l'encadre d'un "h1", directement quand on va inclure notre block "monTitre" dans mon fichier persos.html.twig, le contenu sera basculé dans notre base.html.twig,, et nous aurons un titre sous forme "h1" qui auras été formatté pour l'ensemble de nos fichiers.

base.html.twig
	<h1>{% block MonTitre %}{% endblock %}</h1>

persos.html.twig
	{% block monTitre %}Liste des personnages{% endblock %}

Donc si je relance ma page nous aurons bien toujours notre formattage
http://127.0.0.1:8000/persos

On va voir quand on va rajouter Bootstrap ici 

base.html.twig

	<h1>{% block MonTitre %}{% endblock %}</h1>

on va pouvoir rajouter des classes, en faisant ainsi, tous nos titres seront formatés de la même manière. 

"Vous pouvez donc rajouter des "block" si besoin et utiliser bien-sûr ceux qui sont prédéfinis".

Inclure Bootstrap dans base car il sera présent dans l'ensemble de nos pages.

[Bootstrap](https://getbootstrap.com/)

On va récupérer le CDN dans la partie CSS de Get started du site

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

Je vais l'inclure dans la partie "head" de base.html 

et ensuite on va rajouter la partie Javascript en dessous dans le "body" de base.html

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

Nous aurons ainsi Bootstrap d'installé. Je n'ai plus qu'à actualiser ma page et le formattage de monTitre vas changer directement

http://127.0.0.1:8000/persos

Maintenant on va pouvoir formatter notre titre directement dans la partie base.html.twig, je vais pouvoir réaliser un formattage présent dans tous nos fichiers.

base.html.twig
	<h1 class="rounded border border-dark bg-primary p-2 m-2 text-white">{% block MonTitre %}{% endblock %}</h1>

http://127.0.0.1:8000/persos
http://127.0.0.1:8000


#####    3.17. Twig et Contrôleur

Envoyer des infromations depuis le contrôleur à nos templates. Pour transmettre une information, il va falloir indiquer un deuxième paramètre dans la fonction render() qui va être un tableau associatif qu'on voudra transferer à notre template.

PersonnageControlleur.php
	
	...

	/**
     * @Route("/persos", name="persos")
     */
    public function persos(): Response
    {
        return $this->render('personnage/persos.html.twig', [
            'controller_name' => 'PersonnageController',
			'name' => 'toto',
        ]);
    }

Afficher le nom dans notre template persos.html dans la parie "body"

persos.html.twig
	
	...
	<div>{{ nom }}</div>
	...

Le template va pouvoir faire le lien avec la clé 'name' qui est présente dans le tableau associatif de notre contrôleur persos()

Cela va s'utiliser dans le template comme les objets Javascript JSON.

http://127.0.0.1:8000/persos

L'information à bien été transféré, nous affichons bien le name.

Nous allons pouvoir de cette manière envoyer des retours de requêtes. En effet, quand on fait des "query" ce qu'on récupère en général ce sont des tableaux associatifs qui seront ainsi transmis à nos template qui seront alors capable de traiter l'information et de les affichers rapidement grâce à Twig.

PersonnageControlleur.php
	...
	'age' => 25,
	...

persos.html.twig

	...
	<div>{{ age }}</div>
	...

Maintenant ce que l'on va pouvoir faire c'est définir une structure un peu plus complexe.
Je veux dans mon tableau associatif un autre tableau.

PersonnageController.php

	...
	'carac' => [
		'force' => 3,
		'agi' => 2,
		'intel' => 3
	]
	...

En respectant la syntaxe JSON je vais pouvoir afficher les nouvelles informations de mon tableau associatif "carac"

persos.html.twig

	...
	<div>Force: {{ carac.force }}</div>
	<div>Agilité: {{ carac.agil }}</div>
	<div>Intelligence: {{ carac.intel }}</div>
	...

Donc, vous envoyez des informations depuis le contrôleur sous forme de tableau associatif PHP que vous pouvez ensuite traîter comme des object Javascript.

#####    3.18. Twig et les routes - le menu

Ajouter un menu (Bootstrap) à nos pages. 

[Récupérer Menu de Boostrap](https://getbootstrap.com/docs/5.1/components/navbar/)
Boostrap documentation / Components / NavBar

Copier le code et l'inclure directement dans le body notre template base.html ou le mettre dans un fichier dedié. Je vais créér un nouveau fichier que je vais inclure à cet endroit.
Pour ce faire je vais créer un nouveau fichier dans mon répertoire "templates" 

/templates/menu.html.twig

à l'interieur de ce fichier je peux inclure le code Navbar de boostrap que j'ai copié.
L'objectif ça va être de l'afficher sur toutes nos pages.
Il va falloir donc inclure le menu.html dans notre base.html
Ici ce n'est pas un 'extends' mais un 'include' qu'il faudra utiliser.

base.html.twig 
	...
	<body>
		{% include "menu.html.twig" %}
	...

http://127.0.0.1:8000/persos

Nous avons bien récuperé et affiché le Menu (Navbar) de Bootstrap.
Il ne reste plus qu'à le paramétrer pour avoir ce que l'on souhaite.

menu.html.twig

Donc ici on a bien écrit nos addresses...
	...
	href="/"
	...
	href="/persos"
	...

...sauf que ça va être assez limitant à partir du moment que l'on voudra changer nos routes et être sur certains autres fichiers cela va nous poser un problème. Au lieu de mettre en "dur" nos routes on va plutôt utiliser le systeme de routage de Symfony avec twig.

On va utiliser le "name" dans nos routes annotations qui va nous permettre de définir un nom à nos routes. Et sera utilisable au niveau de notre fichier twig.

Donc ici pour accéder à la page d'accueil, au lieu d'appeler l'URL avec "/" je vais le renommer la valeur par default.  
Je fais de même pour l'url "/persos".

PersonnageController.php

	...
	/**
     * @Route("/", name="acceuil")
     */
	...

	 /**
     * @Route("/persos", name="personnages")
     */
	...

Je vais alors modifier dans ma Navbar, au lieu de vouloir accéder à "/" ou "/persos" je veux accéder en fait au nom que j'ai défini dans mes routes annotations de mon personnnageController. Ce qui va nous permettre de manière très simple d'avoir le lien entre le nom de notre route et la vrai url présente sur le site. 

On va le faire en utilisant du twig avec la fonction path() et mettre à l'intérieur le nom de la route que l'on souhaite.

menu.html.twig

		...
	href="{{ path("accueil") }}"
	...
	href="{{ path("personnages" }}"
	...

http://127.0.0.1:8000/persos

Ca fonctionne toujours et l'on peut voir qu'au niveau de l'url il n'y a pas eu de changements...

	localhost:8000/persos

...par contre maintenant, vu que l'on a défini ces informations en utilisant Twig et le "name" de la route, si je souhaite apporter un quelconque modification et que je change mes routes, par exemple au lieu d'avoir "/persos" mais que je met "/toto" notre lien fonctionnera toujours.

On ne fera la modification qu'à un seul endroit de notre code et nous n'aurons pas à le modifier dans tous les fichiers/pages qui utiliserais le lien en "dur".

exemple:

J'ai un lien avec une route "hardcoded" dans un page fictive exemple.html que je devrais modifier manuellement... 

exemple.html.twig

	<a href="/persos"></a>

...alors qu'avec Twig path() et le nom de ka route (au lieu du chemin) si il devait y avoir une modification de route ("/titi" au lieu de "/persos"), premièrement, la modification n'aura besoin d'être apporté quà un seul endroit, uniquement dans mon Controller et non pas dans tous les fichiers qui pourrait utiliser cette route. En effet, mon lien sera toujours valable pour cette route car elle utilise le nom et non pas le chemin de la route affecté à ce lien. 

	<a href="{{ path("personnages") }}"></a>

C'est pourquoi nous utiliserons toujours le path() de Twig pour définir nos routes dans l'application.

La fonction path() permet de lier une route et un lien dans Twig.

#####    3.19. Fichier "Client": images et CSS

Intégrer des images et du CSS personnalisé, ou tout types de fichier "client" qui sera utilisé par le navigateur.

Rajouter dans le dossier public/ les fichiers qui nous intéressent. 

Donc on va créér un dossier images/

/public/images/

Vous pouvez trouvez des images en licence CCO cad qu'elle sont utilisables pour un usage commercial libre sur le site [Kenney](https://www.kenney.nl/)

Télécharger les images fournis avec la formation udemy: images.zip et les intéger directement au dossier en faisant un copier/déposer.

/public/images/armes et /public/images/personnages

On va essayer d'afficher directement les images dans la vue. La page "personnages" aura accès aux images en utilisant une balise "img" avec l'attribut "src" dans lequel on mettra le chemin de notre image en partant de la racine /images/...

persos.html.twig

	...
	<div><img src="/images/personnages/Marc.png"></div>
	...

Problème: notre lien ici ne fonctionnera pas sur internet (en production par exemple) si par exemple vous avez un autre chemin. Cad que si vous n'êtes pas à la racine de votre site. 

Donc au lieu de faire ainsi on va utiliser une fonctionnalité de Twig sur les assets pour intégrer les images. Du coup peu importe ou sera placé votre site, ce sera Twig et Symfony qui géreront les emplacements et comment intégrer les images. 

Nous allons donc utiliser une fonction de Twig asset() et à l'intérieur nous allons indiquer le chemin de l'image à partir de public. Cad qu'ici je ne met pas le "/".

persos.html.twig

	...
	<div><img src="{{ asset("images/personnages/Marc.png") }}"></div>
	...

C'est donc de cet manière que l'on va intégrer chacuns de nos assets. Tout ce qui sera fichier client et qui sera présent dans public.

Maintenant en plus de notre image nous allons rajouter un fichier CSS, si par exemple je veux ajouter du style à notre site.

Rajoutons alors dans le dossier public un dossier css. Dans celui-ci nous allons rajouter un dossier main.css

/public/css/main.css

	body {
		background: red;
	}

et pour intégrer ce fichier il va falloir le faire dans le fichier base.html

base.html.twig
	...
	<link rel="stylesheet" href="/css/main.css">
	...

Là aussi, pour les même raisons que pour les images, marquer un chemin comme ça depuis la racine alors que cela va dépendre de ce que vous aller faire au niveau de votre site, il vaut mieux utiliser la fonction asset() de Twig. En omettant le "/" de la racine.

base.html.twig
	...
	<link rel="stylesheet" href="{{ assett("css/main.css") }}">
	...

Ce sera alors Symfony qui va gérer le chemin à partir de "public".

http://127.0.0.1:8000/persos

Voici comment utiliser des fichiers que vous avez envoyé à votre client cad au navigateur.

#####    3.20. Lister des personnages

Nous allons créér plusieurs personnages que nous allons lister dans notre page personnages. Pour cela nous allons déclarer plusieurs personnages en tant que tableau associatif et ensuite nous allons l'intégrer dans un autre tableau que l'on enverra à notre template. Plusieurs tableaux associatifs pour plusieurs personnages.

PersonnnageController.php

	...
	$j1 = [
		'nom' => 'Marc',
        'age' => 25,
		'sexe' => true,
        'carac' => [
            'force' => 3,
            'agi' => 2,
            'intel' => 3
		]
	];
	$j2 = [
		'nom' => 'Milo',
        'age' => 30,
		'sexe' => true,
        'carac' => [
            'force' => 5,
            'agi' => 1,
            'intel' => 2
		]
	];
	$j3 = [
		'nom' => 'Tya',
        'age' => 22,
		'sexe' => false,
        'carac' => [
            'force' => 1,
            'agi' => 2,
            'intel' => 5
		]
	];
	...

On va envoyer à notre template ces trois personnages dans un tableau associatif.
On va déclarer un nouveau tableau et je vais y mettre à l'intérieur des clés pour avoir un tableau associatif
	...
	$players = [
		'j1' => $j1,
		'j2' => $j2,
		'j3' => $j3
	];
	...
Il ne me reste plus qu'à les transmettre à notre template. Donc ici je vais envoyer un tableau associatif qui aura la clé "players" et dedans je vais y mettre le tableau que nous venons de remplir.

	...
	return $this->render('personnage/persos.html.twig', [
        'controller_name' => 'PersonnageController',
		'players' => $players
    ]);

Note: on peut faire plus court mais nous préférons ici détailler les instructions pour une bonne compréhension du cours.

L'objectif cela va être de boucler sur ce tableau "players" dans le template Twig persos.html.twig

Nous allons supprimer les informations précédente pour partir de zéro.
Donc nous voulons parcourir ce tableau associatif et faire un affichage des variables.

persos.html.twig

	...
		{% for player in players %}
			<div>{{ player.nom }}</div>
		{% endfor %}


Note: supprimer le style background red qui était juste un test. Après actualisation si le style persiste vider le cache avec la commande:
	
	Ctrl + F5

Nous allons créer une table et en dessous une ligne par personnages avec la boucle for et à l'intérieur je vais créer une nouvelle ligne à chaque fois pour chacun de mes personnages qui auront chacun une image, un name, age, sexe...

Note: nous allons utiliser la concatenation php qui utilise le tilde (~) pour renseigner le chemin dans la fonction asset().

	...
	<table class="table">
    	<tr class="thead-dark">
        	<th>Image</th>
        	<th>Nom</th>
        	<th>Age</th>
        	<th>Sexe</th>
        	<th>Force</th>
        	<th>Agilité</th>
        	<th>Intelligence</th>
    	</tr>
		{% for player in players %}
			<tr>
				<td><img src="{{ asset('images/personnages/' ~ player.nom ~ '.png') }}"></td>
				<td>{{ player.nom }}</td>
				<td>{{ player.age }}</td>
				<td>
					{% if player.sexe %}
						Homme
					{% else %}
						Femme
					{% endif %}
				</td>
				<td>{{ player.carac.force }}</td>
				<td>{{ player.carac.agi }}</td>
				<td>{{ player.carac.intel }}</td>
			</tr>
		{% endfor %}
	</table>

#####    3.21. Passage en POO

Rappel sur la POO en transformant ce que nous avons fait dans le chapitre précedent en une classe personnages. Pour ce faire on va la créer un nouveau fichier Personnage.php dans le dossier "Entity".

/Entity/Personnage.php

Rappel! Le mot clé "public" permet d'indiquer que l'attribut est accessible directement depuis l'extérieur de la classe.
En private c'est impossible (il faut passer par des Getters /Setters)

Note: nous allons utiliser des variables public por l'exemple mais pour le reste de l'application nous utiliserons le keyword private.

	<?php

	namespace App\Entity;

	class Personnage {

    	public $nom;
    	public $age;
    	public $sexe;
    	public $carac = [];

	public function __construct($nom, $age, $sexe, $carac) {

    }

Un constructeur permet d'instancier une classe. cad une classe est un moule. Quand on appel cette classe avec un constructeur on va créer un objet de cette classe.

Les informations (variables) envoyé dans le constructeur ne sont pas celles que nous avons défini plus haut. Pour faire références à celle-ci nous allons utiliser le mot-clé "$this" qui fait référence au elements (variable déclaré au début de la classe) de l'objet.

Donc, l'information de l'objet en cours va prendre le "nom" qui est transmis à la fonction __construct() en paramètre, et je fais ça pour les 4 informations.

	...
	public function __construct($nom, $age, $sexe, $carac) {
		$this->nom = $nom;
		$this->age = $age;
		$this->sexe = $sexe;
		$this->carac = $carac;
    }

Nous allons maintenant de créer une fonction qui va nous permettre de créer nos personnages.
Cette function sera "static" cad qu'elle sera appelable partout dans notre application en appelant directement le nom de la classe.
	
	...
	public static function creerPersonnages() {
		$p1 = new Personnage("Marc", 25, true, [
			"force" => 3,
			"agi" => 2,
			"intel" => 3
		]);
		$p1 = new Personnage("Milo", 30, true, [
			"force" => 5,
			"agi" => 1,
			"intel" => 2
		]);
		$p1 = new Personnage("Tya", 22, false, [
			"force" => 1,
			"agi" => 2,
			"intel" => 5
		]);
	}

Quand nous allons appeler cette fonction creerPersonnage() elle fera appel au constructeur qui lancera la fonction __construct() qui permettra de générer un personnage. 

Donc là on va générer 3 personnages et rien d'autre.
Si je souhaite maintenant disposer de ces 3 personnages, c'est que lorsque je crée mon personnage avec mon constructeur je vais renseigner l'information quelque part. 

Le plus simple pout le faire ça va être de déclarer une propriété static $personnages qui sera un tableau et qui contiendra notre liste de personnages

	...
	public static $personnages = [];
	...

et à chaque fois que l'on appelera notre constructeur pour générer un nouveau personnage on complètera ce tableau $personnages qui sera accessible depuis n'importe où puisqu'on à le mot-clé "static".

Donc, dans le constructeur je vais dire "$personnages" va recevoir la valeur de l'objet que nous sommes en train de créer cad "$this". 

	...
	$personnages[] = $this;
	...

Par contre pour faire référence à cette propriété static $personnages de la classe, il lva falloir utiliser le mot-clé "self" qui fait appel directement à la classe Personnage quand on est à l'intérieur d'un object qui fait partie de la classe.

	...
	self::$personnages[] = $this;
	...

!Important: La partie concernant les propriétés "static" n'est pas fondamentale dans le cadre du cours Symfony (mais nécessaire tant qu'on a pas vu la partie BD). 
En conséquence, si vous ne maîtrisez pas à 100% cette notion, cela ne vous bloquera pas pour la suite du cours (modules suivant).

Donc, ici on va générer des personnages qu'on va remplir directement dans cette propriété static $personnages qui est un tableau qu'on pourra utiliser directement dans nos vues.

Maintenant il ne nous reste plus qu'à utiliser cette classe, et à utiliser la fonction creerPersonnages() pour générer nos personnages.

PersonnageController.php

	...
	use App\Entity\Personnage;
	...
	...
	Personnage::creerPersonnages();

	...
	'players' => Personnage::$personnages

On génére nos personnage qui seront rempli dans notre tableau static $personnages de la classe Personnage que l'on peut alors utiliser dans la fonction render() afin de les passer à notre template persos.html


!Attention: Conceptuellement mettre les fonctions "static" dans cette classe n'est pas une bonne pratique. Le reste du cours vous montrera comment faire avec Symfony.

Bine entendu pour faire un fichier plus "propre" et bien respecter les notions de POO on devrait normalement passer toutes les variables "public" en "private" et faire des getters et des setters. On le verra dans les autres modules de ce cours.


#####    3.22. Méthode GET

On va devoir faire en sorte de pouvoir cliquer sur le nom d'un personnage de la liste des personnages pour afficher ses informations sur une page dédié cad faire une page listant les informations d'1 personnage. On devra ainsi transmettre des informations de pages en pages en utilisant la méthode GET.

On va mettre chacun des noms des personnages clickable en mettant un lien qui permettra d'ouvrir une nouvelle page. cad au niveau de l'url cela enverra par exemple localhost:8000/persos/[personnage-nom]
127.0.0.1:8000/persos/marc
Pour faire cela on va devoir transmettre les informations souhaité via l'url et on va donc utiliser la méthode GET.

Tout d'abord on va transformer les noms en liens

persos.html.twig

	...
	<td><a href="{{ path("afficher_personnage") }}">{{ player.nom }}</a></td>
	...

PersonnageController.php

	...
	/**
     * @Route("/persos/{nom}", name="afficher_personnage")
     */
    public function affihcerPerso(): Response
    {
        //
    }
	...

Si on actualise la page personnage une exception est levé (erreur).
	An exception has been thrown during the rendering of a template ("Some mandatory parameters are missing ("nom") to generate a URL route "afficher_personnage".")

Explication: Notre route s'attend à avoir l'information "nom" qui lui est transmise. Et pour le moment on ne la pas encore renseigné. Il va donc falloir retourner dans la vue et rajouter cette information au path(). Pour ce faire la fonction path() prend un deuxième argument qui sera un objet JSON, et on va indiquer les informations que l'on va envoyer en l'occurence ici le "nom". Ensuite on va lui donner sa valeur player.nom.

persos.html.twig

	...
	<td><a href="{{ path("afficher_personnage", {"nom": player.nom}) }}">{{ player.nom }}</a></td>
	...

Maintenant il reste à traîter ses informations. Et capter cette information au niveau de notre fonction afficherPerso(). cad que la route va récuperer avec {nom} et va le mettre directement en paramètre ($nom) de la fonction.
(On peut remercier Symfony pour la simplicité de ses actions là.)

PersonnagController.php

	...
	/**
     * @Route("/persos/{nom}", name="afficher_personnage")
     */
	public function afficherPerso($nom): Response
    {
		//
	}
	...

Maintenant que l'on a récupéré cette propriété on peut traîter l'information par exemple en l'affichant.

On va déjà créer une nouvelle vue dans /template/personnage

/template/personnage/perso.html.twig

	...
	{% block monTitre %}Personnage {{ perso }}{% endblock %}
	...

PersonnageController.php 

	...
		'perso' => $nom
	...

Maintenant ce que l'on voudrait c'est lister les informations du personnage sélectionné. Pour cela nous allons utiliser notre classe Personnage et créer une nouvelle fonction qui va permettre de récupérer les informations d'un personnage en fonction de son nom.

Remarque: Petite particularité ici on va devoir recréer notre liste de personnages qui a été supprimé entre temps lors des rafraîchissement des pages. 

On verra dans le prochain module qu'au lieu d'avoir des données inscrites en "dur" ici dans le code on les aura en base de données. Donc là je recrée ma liste de personnage et à partir de cette liste de personnages je veux récupérer un personnage en utilisant une nouvelle fonction getPersonnageParNom() et je vais lui transférer l'information du "nom" séléctionné. 

PersonnageController.php

	...
	public function afficherPerso($nom)
	{
		Personnage::creerPersonnages();
		Personnage::getPersonnageParNom($nom);
		...
	}

	...

Cette fonction static que l'on va créer dans la classe Personnage (!note: une méthode plus "propre" aurait été de faire "Manager" pour éviter d'avoir ces fonctions "static". Ce n'est pas l'objectif du cours, et ces points ne sont pas fondamentales avec Symfony) retournera un personnage que je vais mettre dans une variable $perso

	...	
		$perso = Personnage::getPersonnageParNom($nom);
	...

et cette information je vais l'envoyer ensuite à mon template directement qui pourra alors m'afficher un personnage.

	...
			'perso' => $perso
	...

Il me reste à coder cette fonction getPersonnageParNom(). L'objectif de cette fonction sera de parcourir la liste des personnage pour trouver le nom souhaité.

Personnage.php

	...
	public static function getPersonnageParNom($nom) {
		foreach(self::$personnages as $perso) {
			if (strtolower($perso->nom) === $nom) {
				return $perso;
			}
		}
	}

On va supprimer les majuscule dans nos noms pour ne créer de problèmes avec nos liens avec la fonction strtolower(). Ainsi j'ai transformé chacune des valeur nom de ma liste de personnages que la fonction va parcourir en lettres minuscules. 

On va aussi s'assurer que le $nom auquel on compare les noms de la liste de mes personnages dispose d'un valeur en minuscule. Cela nous irons le faire dans le template perso.html

Maintenant que nous avons récupérer notre personnage séléctionné et que nous l'avons envoyé à notre template. Il ne nous reste plus qu'a l'afficher. 

perso.html.twig

	...
	{% block monTitre %}Personnage {{ perso.nom }}{% endblock %}
	...

En cliquant sur le lien Marc de la page qui liste nos personnages, nous rencontrons une nouvelle exception.

	Impossible to access an attribute ("nom") on a null variable

En effet, pusique ce que l'on envoi à l'intérieur de notre lien 
localhost:8000/persos/Marc
le nom commence avec une majuscule 

On va donc devoir s'assurer au niveau de notre template que l'on envoi bien l'information en minuscule.

Il faut transformer le player.nom de la fonction path() dans notre page persos.html avec une fonction Twig.

persos.html.twig

	...
	<td><a href="{{ path('afficher_personnage', {'nom': player.nom | lower}) }}">{{ player.nom }}</a></td>
	...

Ainsi la variable transmise sera formatté en minuscule.

On est donc maintenant capable de transmettre ces informations récupéré par la fonction getPersonnageParNom($nom) et de les afficher.

perso.html.twig

	...
	<div class="row">
		<div class="col-2">
			<img src="{{ asset('images/personnages/' ~ perso.nom ~ '.png') }}">
		</div>
	</div>
	...

Il ne nous reste plus qu'à renseigner les reste des informations en créant une nouvelle colonne qui va prendre le reste de l'espace disponible de ma "div" class="row" et dans laquelle on va y mettre le reste des informations d'un personnage.

	...
		</div>
		<div class="col">
			<h2>{{ perso.nom }}</h2>
			<div>
				{% if perso.sexe %}
					Homme
				{% else %}
					Femme
				{% endif %}
			</div>
			<h3>Les caractéristiques</h3>
			<ul>
				<li>Force: {{ perso.carac.force }}</li>
				<li>Agilité: {{ perso.carac.agi }}</li>
				<li>Intelligence: {{ perso.carac.intel }}</li>
			</ul>
		</div>
	...

Voici comment transmettre des informations via Twig et la méthode GET.


#####  	 3.23. Exercice: les armes	

###### Début exercice dans new Branch fefature-armes 
	
Ajouter des pages permettant de lister des armes. Donc comme précédemment (Pour les Joueurs/Players) vous avez trois images. Vous mettrez le nom de l'arme à coté, et ces noms devront être cliquable pour lancer une autre page (ex: localhost:8000/armes/epee) qui permettrons d'afficher l'arme et des informations supplémentaire. 
(cf. screenshots)

Reprendre chacunes des étapes de ce que l'on à fait précédemment:
1. Créer le Contrôleur
2. Envoyer les informations dans les vues
3. Afficher les informations


Important: je vais créer une nouvelle branche git pour faire l'exercice.

---

[Create a Git Branch](https://devconnected.com/create-git-branch/)
	
Create Git branch using checkout

The easiest way to create a Git branch is to use the “git checkout” command with the “-b” option for a new branch. Next, you just have to specify the name for the branch you want to create.

	$ git checkout -b <branch-name>

As an example, let’s say that you want to create a new Git branch from the master branch named “feature”

To achieve that, you will run the “git checkout” command with the “-b” option and add “feature” as the branch name.

	$ git checkout -b feature
	Switched to new branch 'feature'

As you can see, by using the “git checkout” command, you are creating a new branch and you are switching to this new branch automatically.

---

	$ git checkout -b feature-armes
	Switched to a new branch 'feature-armes'

	$ git status
	
	On branch feature-armes
	nothing to commit, working tree clean


1. Créer le Contrôleur

from **3.15. Première page**

1.1. Create a new controller class:

	$ symfony console make:controller ArmeController

	 created: src/Controller/ArmeController.php
	 created: templates/arme/index.html.twig

---

	$ git add .
	$ git commit -m "..." 

	$ git push origin feature-armes

---

Question: What the purpose of the templates/armes/index.html.twig file ? Can I delete it ?
Maybe it is juste an generic template that I need to modify?

from **3.16. Twig - Les templates**

"Les informations seront transmises par les 'contrôleurs' et nous les enverrons sous forme de tableaux associatifs qui seront ensuite utilisables comme des objets Javascript dans le cadre de nos fichiers Twig."

base.html.twig
	<h1>{% block MonTitre %}{% endblock %}</h1>

1.2. Créer un fichier armes.html.twig 

armes.html.twig

	{% block monTitre %}Liste des armes{% endblock %}

http://127.0.0.1:8000/armes

1.3. Y ajouter la nouvelle route "/armes" ainsi que la fonction armes() dans notre contrôleur.

Attention! Si vous copiez/coller la function index() de la classe ArmeController le template utilisé dans la fonction render renverra à arme/index.html.twig au lieu du template nouvellement créé arme/armes.html.twig

N'oubliez donc pas de modifier la vue qui sera utilisé dans ma nouvelle fonction armes() que je viens de créer à partir d'un copier/coller de la fonction index().


La fonction armes() passera une liste d'armes sous forme de tableau associatif à la vue afin qu'elle puisse les afficher.

ArmeController.php

	...
	**
     * @Route("/armes", name="armes")
     */
    public function armes(): Response
	{
		return $this->render('arme/armes.html.twig', [
			'controller_name' => 'ArmeController',
		])
	}


2. Envoyer les information dans les vues

from **3.17. Twig et Contrôleur**

Envoyer des infromations depuis le contrôleur à nos templates. Pour transmettre une information, il va falloir indiquer un deuxième paramètre dans la fonction render() qui va être un tableau associatif qu'on voudra transferer à notre template.

2.1. Pour le moment faisons juste un test avec des données passé en "dur"...

personnageControlleur.php
	
	...

	/**
     * @Route("/armes", name="armes")
     */
    public function s(): Response
    {
        return $this->render('arme/armes.html.twig', [
            'controller_name' => 'ArmeController',
			'nom' => épée',
        ]);
    }

Afficher l'arme dans notre template armes.html dans la partie "body"

armes.html.twig
	
	...
	<div>{{ nom }}</div>
	...

Le template va pouvoir faire le lien avec la clé 'nom' qui est présente dans le tableau associatif de notre contrôleur armes()

Cela va s'utiliser dans le template comme les objets Javascript JSON.

http://127.0.0.1:8000/armes

L'information à bien été transféré, nous affichons bien l'arme.

Nous allons pouvoir de cette manière envoyer des retours de requêtes. En effet, quand on fait des "query" ce qu'on récupère en général ce sont des tableaux associatifs qui seront ainsi transmis à nos templates qui seront alors capable de traiter l'information et de les afficher rapidement grâce à Twig.

ArmeControlleur.php
	...
	'nom' => 'épée',
    'desc' => 'Une superbe épée tranchante',
    'degat' => 10
	...

armes.html.twig

	...
	<div>{{ nom }}</div>
    <div>{{ desc }}</div>
    <div>{{ degat }}</div>
	...

Maintenant ce que l'on va pouvoir faire c'est définir une structure un peu plus complexe.
Je veux dans mon tableau associatif un autre tableau.

ArmeController.php

	...
	'carac' => [
		'desc' => 'Une superbe épée tranchante',
		'degat' => 10
	]
	...

En respectant la syntaxe JSON je vais pouvoir afficher les nouvelles informations de mon tableau associatif "a"

armes.html.twig

	...
	<div>{{ nom }}</div>
	<div>{{ carac.desc }}</div>
	<div>Degat: {{ carac.degat }}</div>
	...

Donc, vous envoyez des informations depuis le contrôleur sous forme de tableau associatif PHP que vous pouvez ensuite traîter comme des object Javascript.


2.2. Ajouter en item le lien de la nouvelle page "armes" dans le menu (Navbar)
 
from **3.18. Twig et les routes - le menu**

ArmeController.php

	..

	 /**
     * @Route("/armes", name="armes")
     */
	...


menu.html.twig

	...
	<li class="nav-item">
		<a class="nav-link" href="{{ path("armes") }}">Armes</a>
	</li>
	...

http://127.0.0.1:8000/armes


2.3. Afficher l'image de l'arme correspondante dans notre template

from **3.19. Fichier "Client": images et CSS**

Nous allons donc utiliser une fonction de Twig asset() et à l'intérieur nous allons indiquer le chemin de l'image à partir de public. Cad qu'ici je ne met pas le "/".

armes.html.twig

	...
	<div><img src="{{ asset("images/armes/arc.png") }}"></div>
	...

2.4. Lister des armes

from **3.20. Lister des personnages**

Nous allons créér plusieurs armes que nous allons lister dans notre page armes. Pour cela nous allons déclarer plusieurs armes en tant que tableau associatif et ensuite nous allons l'intégrer dans un autre tableau que l'on enverra à notre template. Plusieurs tableaux associatifs pour plusieurs armes.

ArmeController.php

	...
	$a1 = [
		'nom' => 'épée',
        'carac' => [
            'desc' => Une superbe épée tranchante,
            'degat' => 10,
		]
	];
	$a2 = [
		'nom' => 'arc',
        'carac' => [
            'desc' => Une arme à distance,
            'degat' => 7,
		]
	];
	$a2 = [
		'nom' => 'hache',
        'carac' => [
            'desc' => Une arme ou un outil,
            'degat' => 15,
		]
	];
	
	...

On va envoyer à notre template ces trois armes dans un tableau associatif.
On va déclarer un nouveau tableau et je vais y mettre à l'intérieur des clés pour avoir un tableau associatif
	...
	$weapons = [
		'w1' => $a1,
		'w2' => $a2,
		'w3' => $a3
	];
	...
Il ne me reste plus qu'à les transmettre à notre template. Donc ici je vais envoyer un tableau associatif qui aura la clé "weapons" et dedans je vais y mettre le tableau que nous venons de remplir.

	...
	return $this->render('arme/armes.html.twig', [
        'controller_name' => 'ArmeController',
		'weapons' => $weapons
    ]);

Note: on peut faire plus court mais nous préférons ici détailler les instructions pour une bonne compréhension du cours.

L'objectif cela va être de boucler sur ce tableau "weapons" dans le template Twig armes.html.twig

Nous allons supprimer les informations précédente pour partir de zéro.
Donc nous voulons parcourir ce tableau associatif et faire un affichage des variables.

Testons si le template récupère bien nos données...

armes.html.twig

	...
		{% for weapon in weapons %}
			<div>{{ weapon.nom }}</div>
		{% endfor %}

http://127.0.0.1:8000/armes


2.5. Rajouter l'image à nos armes

Nous allons créer une table sans ligne de titre (th) et en dessous une ligne par arme avec la boucle for et à l'intérieur je vais créer une nouvelle ligne à chaque fois pour chacun de mes armes qui auront chacun une image et un nom 

Note: nous allons utiliser la concatenation php qui utilise le tilde (~) pour renseigner le chemin dans la fonction asset().

armes.html.twig

	...
		<table class="table table-borderless">
        	{% for weapon in weapons %}
            	<tr>
                	<td style="width: 20%"><img src="{{ asset('images/armes/' ~ weapon.nom | replace({'é':'e'}) ~ '.png') }}"></td>
                	<td>{{ weapon.nom }}</td>
            	</tr>
        	{% endfor %}
    	</table>
	...

Remarque: étant donné que l'arme au nom d'épée utilise des accent et que l'image .png associé n'en comporte pas. Nous devons formatter notre nom d'arme avec par exemple la fonction Twig replace({'[character-target]':'[replace-character-by]'}) 

Note: Afin d'espacer correctement les cellule de ma table (cf scrrenshots 3.23.ExerciceLesArmes), j'ai rajouté un style directement à la cellule (td) qui contient mon image pour définir une largeur souhaitée (il faudra sûrment par la suite le retirer du fichier armes.html pour le mettre dans un fichier de style CSS dédié afin de séparer le CSS de l'HTML).

2.6 Passage en POO

from **3.21. Passage en POO**

Transformez ce que nous venons de faire précedemment en une classe Arme. Pour ce faire on va créer un nouveau fichier "Arme.php" dans le dossier "Entity".

/Entity/Arme.php

Rappel! Le mot clé "public" permet d'indiquer que l'attribut est accessible directement depuis l'extérieur de la classe.
En private c'est impossible (il faut passer par des Getters /Setters)

Note: nous allons utiliser des variables public pour l'exemple mais pour le reste de l'application nous utiliserons le keyword private.

	<?php

	namespace App\Entity;

	class Personnage {

    	public $nom;
    	public $age;
    	public $sexe;
    	public $carac = [];

	public function __construct($nom, $age, $sexe, $carac) {

    }

Un constructeur permet d'instancier une classe. une classe est un moule. Quand on appel cette classe avec un constructeur on va créer un objet de cette classe.

Les informations (variables) envoyé dans le constructeur ne sont pas celles que nous avons défini plus haut. Pour faire références à celle-ci nous allons utiliser le mot-clé "$this" qui fait référence aux éléments (variables déclarées au début de la classe) de l'objet.

Donc, l'information de l'objet en cours va prendre le "nom" qui est transmis à la fonction __construct() en paramètre, et je fais ça pour les 2 informations.

	...
	public function __construct($nom, $age, $sexe, $carac) {
		$this->nom = $nom;
		$this->age = $age;
		$this->sexe = $sexe;
		$this->carac = $carac;
    }

Nous allons maintenant de créer une fonction qui va nous permettre de créer nos armes.
Cette fonction sera "static" cad qu'elle sera appelable partout dans notre application en appelant directement le nom de la classe.
	
	...
	public static function creerArmes() {
		$a1 = new Arme("épée", [
			'desc' => 'Une superbe épée tranchante',
			'degat' => 10
		]);
		$a2 = new Arme("arc", [
			'desc' => 'Une arme à distance',
			'degat' => 7
		]);
		$a3 = new Arme("hache", [
			'desc' => 'Une arme ou un outil',
			'degat' => 15
		]);
	}

Quand nous allons appeler cette fonction creerArme() elle fera appel au constructeur qui lancera la fonction __construct() qui permettra de générer une arme. 

Donc là on va générer 3 armes et rien d'autre.
Si je souhaite maintenant disposer de ces 3 armes, c'est que lorsque je crée mon arme avec mon constructeur je vais renseigner l'information quelque part. 

Le plus simple pout le faire ça va être de déclarer une propriété static $armes qui sera un tableau et qui contiendra notre liste d'armes.
	...
	public static $armes = [];
	...

et à chaque fois que l'on appelera notre constructeur pour générer un nouveau personnage on complètera ce tableau $armes qui sera accessible depuis n'importe où puisqu'on à le mot-clé "static".

**Donc, dans le constructeur je vais dire "$armes" va recevoir la valeur de l'objet que nous sommes en train de créer cad "$this".** 

	...
	$armes[] = $this;
	...

Par contre pour faire référence à cette propriété static $armes de la classe, il va falloir utiliser **le mot-clé "self" qui fait appel directement à la classe Arme quand on est à l'intérieur d'un objet qui fait partie de la classe.**

	...
	self::$armes[] = $this;
	...

!Important: La partie concernant les propriétés "static" n'est pas fondamentale dans le cadre du cours Symfony (mais nécessaire tant qu'on a pas vu la partie BD). 
En conséquence, si vous ne maîtrisez pas à 100% cette notion, cela ne vous bloquera pas pour la suite du cours (modules suivant).

Donc, ici on va générer des armes qu'on va remplir directement dans cette propriété static $armes qui est un tableau qu'on pourra utiliser directement dans nos vues.

Maintenant il ne nous reste plus qu'à utiliser cette classe, et à utiliser la fonction creerArmes() pour générer nos personnages.

ArmeController.php

	...
	use App\Entity\Arme;
	...
	...
	Arme::creerArmes();

	...
	'weapons' => Arme:$armes

On génére nos armes qui seront rempli dans notre tableau static $armes de la classe Arme que l'on peut alors utiliser dans la fonction render() afin de les passer à notre template armes.html


!Attention: Conceptuellement mettre les fonctions "static" dans cette classe n'est pas une bonne pratique. Le reste du cours vous montrera comment faire avec Symfony.

Bine entendu pour faire un fichier plus "propre" et bien respecter les notions de POO on devrait normalement passer toutes les variables "public" en "private" et faire des getters et des setters. On le verra dans les autres modules de ce cours.

2.7. Méthode GET 

**Méthode GET**

On va devoir faire en sorte de pouvoir cliquer sur le nom d'une arme de la liste des armes pour afficher ses informations sur une page dédié cad faire une page listant les informations d'1 arme. On devra ainsi transmettre des informations de pages en pages en utilisant la méthode GET.

On va mettre chacun des noms des armes 'clickable' en mettant un lien qui permettra d'ouvrir une nouvelle page. cad au niveau de l'url cela enverra par exemple 

localhost:8000/armes/[arme-nom]
127.0.0.1:8000/armes/épée

Pour faire cela on va devoir transmettre les informations souhaitées via l'url et on va donc utiliser la méthode GET.

Tout d'abord on va transformer les noms en liens

armes.html.twig

	...
	<td><a href="{{ path("afficher_arme") }}">{{ weapon.nom }}</a></td>
	...

ArmeController.php

	...
	/**
     * @Route("/armes/{nom}", name="afficher_arme")
     */
    public function afficherArme(): Response
    {
        //
    }
	...

Si on actualise la page personnage une exception est levé (erreur).
	An exception has been thrown during the rendering of a template ("Some mandatory parameters are missing ("nom") to generate a URL route "afficher_personnage".")

Explication: Notre route s'attend à avoir l'information "nom" qui lui est transmise. Et pour le moment on ne la pas encore renseigné. Il va donc falloir retourner dans la vue et rajouter cette information au path(). Pour ce faire la fonction path() prend un deuxième argument qui sera un objet JSON, et on va indiquer les informations que l'on va envoyer en l'occurence ici le "nom". Ensuite on va lui donner sa valeur weapon.nom.

armes.html.twig

	...
	<td><a href="{{ path("afficher_arme", {"nom": weapon.nom}) }}">{{ weapon.nom }}</a></td>
	...

Maintenant il reste à traîter ses informations. Et capter cette information au niveau de notre fonction afficherArme(). cad que la route va récuperer avec {nom} et va le mettre directement en paramètre ($nom) de la fonction.
(On peut remercier Symfony pour la simplicité de ses actions là.)

ArmeController.php

	...
	/**
     * @Route("/armes/{nom}", name="afficher_arme")
     */
	public function afficherArme($nom): Response
    {
		//
	}
	...

Maintenant que l'on a récupéré cette propriété on peut traîter l'information par exemple en l'affichant.

On va déjà créer une nouvelle vue dans /template/arme

/template/arme/arme.html.twig

	...
	{% block monTitre %}Arme {{ arme }}{% endblock %}
	...

ArmeController.php 

	...
		'arme' => $nom
	...

Maintenant ce que l'on voudrait c'est lister les informations de l'arme sélectionnée. Pour cela nous allons utiliser notre classe Arme et créer une nouvelle fonction qui va permettre de récupérer les informations d'une arme en fonction de son nom.

Remarque: Petite particularité ici on va devoir recréer notre liste d'armes qui a été supprimé entre temps lors des rafraîchissement des pages. 

On verra dans le prochain module qu'au lieu d'avoir des données inscrites en "dur" ici dans le code on les aura en base de données. Donc là je recrée ma liste d'armes et à partir de cette liste d'armes je veux récupérer une arme en utilisant une nouvelle fonction getArmeParNom() et je vais lui transférer l'information du "nom" séléctionné. 

ArmeController.php

	...
	public function afficherArme($nom)
	{
		Personnage::creerArmes();
		Personnage::getArmeParNom($nom);
		...
	}

	...

Cette fonction static que l'on va créer dans la classe Arme (!note: une méthode plus "propre" aurait été de faire "Manager" pour éviter d'avoir ces fonctions "static". Ce n'est pas l'objectif du cours, et ces points ne sont pas fondamentales avec Symfony) retournera une arme que je vais mettre dans une variable $arme

	...	
		$perso = Personnage::getArmeParNom($nom);
	...

et cette information je vais l'envoyer ensuite à mon template directement qui pourra alors m'afficher une arme.

	...
			'arme' => $arme
	...

Il me reste à coder cette fonction getArmeParNom(). L'objectif de cette fonction sera de parcourir la liste des armes pour trouver le nom souhaité.

Arme.php

	...
	public static function getArmeParNom($nom) {
		foreach(self::$armes as $arme) {
			if ($arme->nom === $nom) {
				return $arme;
			}
		}
	}

Maintenant que nous avons récupérer notre personnage séléctionné et que nous l'avons envoyé à notre template. Il ne nous reste plus qu'a l'afficher. 

arme.html.twig

	...
	{% block monTitre %}Arme {{ arme.nom }}{% endblock %}
	...

On est donc maintenant capable de transmettre ces informations récupéré par la fonction getArmeParNom($nom) et de les afficher.

arme.html.twig

	...
	<div class="row">
		<div class="col-2">
			<img src="{{ asset('images/armes/' ~ arme.nom | replace({'é':'e'}) ~ '.png') }}">
		</div>
	</div>
	...

Il ne nous reste plus qu'à renseigner les reste des informations en créant une nouvelle colonne qui va prendre le reste de l'espace disponible de ma "div" class="row" et dans laquelle on va y mettre le reste des informations d'un personnage.

	...
		<div class="col">
            <ul style="list-style-type:none">
                <li>{{ arme.nom }}</li>
                <li>{{ arme.carac.desc }}</li>
                <li>{{ arme.carac.degat }}</li>
            </ul>
        </div>
	...

Voici comment transmettre des informations via Twig et la méthode GET.

###### Fin exercice dans new Branch fefature-armes 

#####  	 3.23. Exercice: les armes (reprise du cours - correction exercices armes)

	$ symfony console make:controller ArmeController

	created: src/Controller/ArmeController.php
	created: templates/arme/index.html.twig

La première chose à faire cela va être d'afficher les informations de base.
Modifions notre menu pour ajouter une nouvelle page, le fait d'avoir le listing des armes.

menu.html.twig

Donc je rajoute à mon menu un nouveau lien pour aller vers les "Armes" et on va créer la route "armes". 

ArmeController.php

modifier la route ainsi que le nom de la route généré par default par notre commande symfony afin qu'elle corresponde au lien que nous venons de rajouter dans notre menu.html

Notre template de base s'appelle templates/arme/index.html.twig que l'on peut renommer si besoin. 

index.html.twig en armes.html.twig

Maintenant que notre contrôleur et notre vue sont prêt il ne nous reste plus qu'à créer notre classe.

Donc dans Entiy on va créer un nouveau ficher Arme.php

Ce coup çi on ne va pas mettre les informations en public mais en private pour respecter les conventions dans le cadre OOP. 

Nous allons avoir besoin encore un fois d'un tableau static que l'on pourra accéder depuis n'importe tout pour accéder à toutes les armes. Nous allons donc respecter le même principe que pour les personnages. On verra de toute façon dans le prochain module que tout cela va être un peu différent parce que nous utiliserons une base de données. 

/Entity/Arme.php

<?php

namespace App\Entity;

class Arme {
	private $nom;
	private $description;
	private $degat;

	public static $armes = [];

	public function __construct($nom, $description, $degat) {
		$this->nom = $nom;
		$this->description = $description;
		$this->degat = $degat;
		self::$armes[] = $this;
	}
}

Vu que les attributs de notre classe est en private il va falloir créer les getters et les setters. 

	...
	public function getNom() {
		return $this->nom;
	}

	public function getDescription() {
		return $this->description;
	}

	public function getDegat() {
		return $this>degat;
	}

Vu que l'on va vouloir combiner les fonctions setters entre elles on va devoir faire un return de $this pour retourner l'objet. Cela sera très pratique pour enchaîner les fonctions entre elles. 

Exemple: 
$arme = new Arme(...);
$arme->setNom("hache")->setDescription("une arme géniale")->setDegat(2);

	...
	public function setNom($nom) {
		$this->nom = $nom;
		return $this;
	}

	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	public function setDegat($degat) {
		$this->degat = $degat;
		return $this;
	}

Il ne nous reste plus qu'à créer une fonction qui va créer chacune des armes. Cette fonction va créer trois armes différentes.

	...
	public static function creerArmes() {
		new Arme("épée", "Une superbe épée tranchante", 10);
		new Arme("arc", "Une arme à distance", 7);
		new Arme("hache", "Une arme ou un outil", 15);
	}

Comme vous pouvez le voir içi nous ne récupérons pas les informations dans une variable puisque dans tout les cas lorsqu'elle sont créé elles sont rajoutés dans le tableau static $armes.

Maintenant utilisons la fonction creerArme() et envoyer le tableau d'armes static à notre vue qui se chargera de l'affichage. 

ArmeController.php

Tip: Pour ajouter le namespace use App\Entity\Arme; via le plugin vsCode d'autocompletion 

1. Survoler ou cliquer Arme de Armes:creerArmes();
2. Alt + Ctrl + i

Nous envoyer les informations à notre vue

	...
	'weapons' => Arme::$armes
	...

armes.html.twig

	....

Créons maintenant notre nouvelle route afficher_arme

ArmeController.php

	....

Maintenant on veut récupérer une arme en particulier. Créons la fonction getArmeParNom($nom). On va juste faire en sorte de supprimer les accents et d'avoir en minuscle $arme->nom 

Pour supprimer les accents en PHP on va utiliser la fonction str_replace() 

	...
	if (strtolower(str_replace('é', 'e', $arme->nom)) === $nom) {
	...

Par contre si on veut utiliser cela, on doit faire les modifications nécessaire au niveau du template, au niveau de notre lien

armes.html.twig 

	...
	<a href="{{ path("afficher_arme", {'nom': weapon.nom | replace({'é':'e'})}) }}">{{ weapon.nom }}</a></td>
	...

Et il nous reste à envoyer cette nouvelle information au nouveau template arme.html 
que nous allons créer. 

ArmeController.php

	....

templates/arme.html.twig

	....

##### Merge feature-armes branch to main

	$ git commit -m "Finish feature-armes"
	
Merge in the feature-armes branch

	$ git checkout main
	$ git merge feature-armes

---

#### Section 4: Deuxième application (mise en place d'une BD)	

##### 4.24. Présentation et objectifs du module
(cf. screenshots)

##### 4.25. Initialisation du projet
(cf. screenshots)

Mettre en place la base de notre deuxième application "2-animaux" pour cela nous allons 
1. Créer notrer projet dans le repertoire principal
2. Créer une base de données et 
3. nous utiliserons l'ORM "Doctrine" qui est l'outil par défaut de Symfony pour gérer la BD
	l'ORM est un outil qui va faire le lien entre la BD et notre application. Grâce à cet outil nous aurons nos "Entités" cad nos "Classes" qui seront liées aux "Tables" de notre BD. Doctrine s'occupera de la "Cohérence" entre notre applicatio et la BD. 
	C'est le code des classes qui seront la référence, et lorsque Doctrine fera ses actions elle mettra à jour la base de données pour être équivalente aux classes de l'application. Enfin grâce à cet outil nous aurons que très peu d'action à réaliser sur la BD.
	Pour utiliser cet outil nous aurons besoin d'un SGBD (système de gestion de BD) MySQL que nous utiliserons avec XAMPP quiu est optionnel mais qui sra très pratique pour vérifier et contrôler notre BD. 
4. Enfin, il faudra réaliser du paramétrage dans le fichier .env pour lier notre BD à notre application.
 

1. et 4. 
	$ symfony new --webapp 2-animaux
	
	[OK] Your project is now ready in /home/thecoderush/Documents/Udemy/creer-4apps-Sf4/2-animaux  


Nous allons devoir modifier les informations de la BD dans le fichier .env
pour y renseigner les informations de la BD.

Note: Commenter la ligne de configuration par défaut de Symfony qui utilise postgresql et decommenter celle de mysql. 

.env

	# DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7&charset=utf8mb4"

	DATABASE_URL="mysql://root:@127.0.0.1:3306/animaux?serverVersion=5.7&charset=utf8mb4"

Nous avons modifié le "db_user" en passant à "root" qui est l'utilisateur par defaut lors de l'installation de XAMPP, effacer "db_password" de base par defaut également lors de l'installation de XAMPP, ensuite au niveau de l'adresse et du port pour accéder à la BD, ici il n'y a rien à changer c'est les paramètres de base XAMPP, il nous reste à choisir le nom de la BD, nous remplaçons "db_name" par "animaux".

---

Note: Créons aussi un nouveau Github repository

	et push an existing repository from the command line

git commit -m "Add 4.25: Initialising projet modifying MySQL DB environment variable"

git remote add origin https://github.com/thecoderush/2-animaux.git
git branch -M main
git push -u origin main

---

##### 4.26. Création de la BD (Doctrine)

2. 

Lancer la création de la BD à partir de Doctrine. Cette BD pourra se créer à partir des informations que l'on a renseigné dans le fichier .env 
On utilisera XAMPP pour visualiser la BD et pour cela il faudra bien entendu démarrer la partie MySQL pour créer la BD et disposer du gestionnaire de BD. Et on lancera Apache pour accéder à PHPMyAdmin pour regarder ce qu'il se passe. 

Donc quand on lancera la commande 'php bin/console doctrine:database:create' directement la BD "animaux" va se créer. 

Ensuite nous allons créer la première table et pour cela c'est le code qui est la référence. On va donc la générer depuis le code en créant ce que l'on appelle une "Entity". On utilisera la aussi la ligne de commande 'symfony console make:entity [entity-name]' en l'occurence on va créer l'entité "Animal".

Cette entité Animal sera une classe et disposera des informations de base d'un animal. Nous disposerons également d'un autre fichier lorsque l'on va lancer cette ligne de commande qui sera le "Repository" qui servira à récupérer les informations de la BD. On va pouvoir y faire des requêtes à l'intérieur de ce fichier. 

Nous aurons donc ces deux fichier (Entity et Repository) qui vont être générés grâce à cette ligne de commande mais pour le moment nous n'aurons pas encore d'informations ni de table dans la BD. Il va falloir réaliser une migration pour créer ces informations depuis l'application jusqu'à la BD. On utilsera donc les deux lignes de commande 'symfony console make:migration' et 'symfony console doctrine:migration:migrate'. 

Ces deux lignes de commande permettrons de migrer tout ce qui à été fait depuis la dernière migration siur la BD. 


2.1. Lancer XAMPP 


Launch XAMPP through the Terminal:
	
		$ sudo /opt/lampp/lampp start

Please note that you you have to start XAMPP manually every time you reboot your system.

Verify XAMPP installation: http://localhost
Verify installation of phpMyAdmin: http://localhost/phpmyadmin


To start graphical XAMPP control panel: 

	$ sudo /opt/lampp/manager-linux-x64.run

2.2. Générer la BD "animaux"

Se déplacer dans le repertoire du projet 2-animaux:

	$ cd 2-animaux

Créer la BD:

	$ php bin/console doctrine:database:create


---

	In ExceptionConverter.php line 119:
                                                              
  	An exception occurred in the driver: could not find driver  
                                                              

	In Exception.php line 30:
                         
  	could not find driver  
                         

	In Driver.php line 28:
                         
  	could not find driver  
                         

	doctrine:database:create [-s|--shard SHARD] [-c|--connection [CONNECTION]] [--if-not-exists]


La commande lève une exception "could not find driver"

	$ symfony check:requirements

	Symfony Requirements Checker
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	> PHP is using the following php.ini file:
	/etc/php/7.4/cli/php.ini

	> Checking Symfony requirements:

	..................................W

	
	 [OK]                                         
	 Your system is ready to run Symfony projects 
	

	Optional recommendations to improve your setup
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	 * PDO should have some drivers installed (currently available: none)
	   > Install PDO drivers (mandatory for Doctrine).

J'ai d'abord décommenté dans php.ini la ligne concernant extension=pdo_mysql et redemarrer l'ordinateur mais toujours la même exception de levé.

Le check requirements m'indique que PDO doit avoir certain drivers qui ne sont pas disponible actuellement et que c'est obligatoire pour Doctrine.

How to activate PHP7.0 PDO ?(https://askubuntu.com/questions/824485/how-to-activate-php7-0-pdo-in-16-04-lts)

Installing php7.0-mysql should be enough:

	$ php -v
	PHP 7.4.28 (cli)

Remarque: j'ai donc remplacé 7.0 par 7.4 et executé la commande suivante:

	$ sudo apt install php7.4-mysql

You will then need to ensure the module is enabled:

	$ sudo phpenmod pdo_mysql

Then restart apache to load the new modules:

Avec XAMPP:

	$ sudo opt/lampp/lampp stop

puis redemarré XAMPP:

	$ sudo opt/lampp/lampp start


Et réessayé la commande de creation de base de données symfony:

	$ symfony console doctrine:database:create

	Created database `animaux` for connection named default

La base de données "animaux" à bien été créé !

http://localhost/phpmyadmin

Attention: un message WARNING à été généré à l'execution de la commande

	PHP Warning:  PHP Startup: Unable to load dynamic library 'pdo_mysql' (tried: /usr/lib/php/20190902/pdo_mysql (/usr/lib/php/20190902/pdo_mysql: cannot open shared object file: No such file or directory), /usr/lib/php/20190902/pdo_mysql.so (/usr/lib/php/20190902/pdo_mysql.so: undefined symbol: mysqlnd_allocator)) in Unknown on line 0


Verifier les modules installé avec PHP: 

	$ php -m

	...
	PDO
	pdo_mysql
	...

Vérifier les modules activés:

	$ php -i

	...
	PDO

	PDO support => enabled
	PDO drivers => mysql

	pdo_mysql

	PDO Driver for MySQL => enabled
	Client API version => mysqlnd 7.4.28

	Directive => Local Value => Master Value
	pdo_mysql.default_socket => /var/run/mysqld/mysqld.sock => /var/run/mysqld/mysqld.sock


Après une recherche sur internet du Warning 'Unable to load dynamic library 'pdo_mysql'
https://stackoverflow.com/questions/62240102/php-warning-php-startup-unable-to-load-dynamic-library-pdo-mysql-so

I solved the problem this way:

sudo apt-get --purge remove php-common

sudo apt-get install php-common php-mysql php-cli

Now there is no error and php -m shows it has everything.

	$ symfony console doctrine:database:create

	Created database `animaux` for connection named default

Everything is ok now !

---

Symfony a bien créer notre base de données "animaux" qui s'affiche désormais dans phpmyadmin. La BD est pour le moment vide puisque nous n'avons pas encore créé de table.

http://localhost/phpmyadmin

3.1. Créer une Entity

On va maintenant passer à la deuxième étape qui va être de créer un entité, cad une classe au niveau de notre application et au niveau de la BD ça sera une table.

	$ symfony console make:entity [entity-name]
	$ symfony console make:entity Animal

	 created: src/Entity/Animal.php
	 created: src/Repository/AnimalRepository.php

Il nous demande maintenant de choisir les proriétés que l'on souhaite mettre dans notre entité et sera répercuté dans notre table en BD. 

champ: nom 
type: string
length: 255
nullable: no

champ: description
type: text
nullable: yes

champ: image
type: string
length: 255
nullable: no


           
	  Success! 
           

	 Next: When you're ready, create a migration with php bin/console make:migration


Remarque: il n'y pas besoin de rajouter un identifiant (id) parce que de base lorsque l'on va créer cette entité en BD quand on va faire la "migration" un champ de type integer en autoincrement sera généré directement dans la table. 

Nous avons créé notre Entité.

Et la dernière action à faire cela va être d'avoir les répercussions au niveau de la BD. 

Animal.php
	...
	
	/**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

	...

Le fichier Animal.php va contenir les champs que nous avons généré. Les annotations vont donner des indications lorsque l'on va faire les migrations sur la BD. Ces annotations aurons aussi un impact au niveau du code.

Ici nous avons donc l'ensemble des champs qui vont se générer en BD et vous pouvez voir que l'on à bien ce champ id alors que l'on a pas choisis de le mettre. Il le met de base, étant une bonne pratique et il ne faut pas le modifier. 

	...
	
	public function getId(): ?int
    	{
            return $this->id;
    	}

	...

Le ?int veux dire que le getter doit retourner un integer (int) ou null (?)

	...

	public function setNom(string $nom): self
    	{
            $this->nom = $nom;

            return $this;
        }

	...

Le self veux dire que la fonction va nous retourner un Animal (objet de classe Animal)  et le return $this permet d'enchainer les setters à la suite et également les autres fonction par ailleurs. 

Il n'y a rien de plus pour le moment. Le constructeur n'est pas présent par ce qu'effectivement ça sera le constructeur par défaut à vide quis sera réalisé. On utilisera donc les setters pour renseigneer les informations sur nos objets Animal.

AnimalRepository.php

	...

	* @method Animal|null find($id, $lockMode = null, $lockVersion = null)
 	* @method Animal|null findOneBy(array $criteria, array $orderBy = null)
 	* @method Animal[]    findAll()
 	* @method Animal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)

	...

Ensuite le fichier Repository AnimalRepository.php va permettre de récupérer des informations. 

Nous retrouvons 4 méthodes de base qui sont présente et qui vont nous permettre de récupérer des informations, comme par exemple le fait que le puisse récupérer :

. un animal en fonction d'un id, 
. un animal en fonction d'un critère,
. tout les animaux,
. des informations selon des critères,

Ces methodes proviennent du ServiceEntityRepository dont est extends la classe AnimalRepository.

Nous pourrons également créer nos propres fonction pour faire des requêtes. Voir la syntaxe utilisé dans le code commenté.


3.2. Faire la répercussion de notre entité dans la BD via une migration

	$ symfony console make:migration

---

		In XmlUtils.php line 50:
                              
	  Extension DOM is required.  

Il faut installer le paquer xml via:

	$ sudo apt install php7.4-xml

---

		Success! 
           

	 Next: Review the new migration "migrations/Version20220502154635.php"
	 Then: Run the migration with php bin/console doctrine:migrations:migrate
	 See https://symfony.com/doc/current/bundles/DoctrineMigrationsBundle/index.html


Un ficher va être généré et sera placé dans le répertoire Migrations/

Migrations/Versions20220502154635.php

Ces fichiers sont très important parcequ'il vont permettre à vous et à votre équipe d'avoir la BD au même "niveau". CAD que quand vous passerez votre application nottament en utilisant GIT, vos collègues auront la possibilité de lancer la migrations à partir des fichiers qui auront été générés. 

Vous pourrez si besoin apporter à ce fichier des modifications. 

3.3. Lancer la migration

	$ symfony console doctrine:migration:migrate

	[notice] Migrating up to DoctrineMigrations\Version20220502154635
	[notice] finished in 33.4ms, used 20M memory, 1 migrations executed, 2 sql queries

Nous aurons alors notre base de données qui sera impacté. 

http://localhost/phpmyadmin



---

Change operating system to Ubuntu 22.04

Need to re-install tools

* Xampp
* GIT
* Composer
* Symfony

Note: We will keep the same versions for both. I mean XAMPP with PHP 7.4 and Symfony 5.

* And re-create the database and re-migrate the migration.

1. [How To Install XAMPP On Ubuntu 20.04|22.04](https://techviewleo.com/how-to-install-xampp-on-ubuntu/)

	Welcome to XAMPP for Linux 7.4.27

2. [How to Install/Upgrade GIT on Ubuntu 22.04 LTS](https://www.linuxcapable.com/how-to-install-upgrade-git-on-ubuntu-22-04-lts/) 

	git version 2.36.1

3. [How To Install and Use Composer on Ubuntu 22.04](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-22-04)

	Composer (version 2.3.5) successfully installed to: /usr/local/bin/composer

4. [Installing & Setting up the Symfony Framework](https://symfony.com/doc/5.4/setup.html)

	[OK]
	 Your system is ready to run Symfony projects
	 
...

Installing php8.1-mysql should be enough:

	$ php -v
	PHP 8.1 (cli)

Remarque: j'ai donc remplacé 7.0 par 8.1 et executé la commande suivante:

	$ sudo apt install php8.1-mysql

You will then need to ensure the module is enabled:

	$ sudo phpenmod pdo_mysql
	
	$ symfony check:requirements
	
	 [OK]
	 Your system is ready to run Symfony projects


Verify PHP version

	PHP 8.1.2 (cli) (built: Apr  7 2022 17:46:26) (NTS)

Verify Symfony version

Important: go to a Symfony project folder and execute following command:

	$ symfony console server:start

	Welcome to Symfony 5.4.8


5. 	$ symfony console doctrine:database:create

	Created database `animaux` for connection named default

localhost/phpmyadmin la bd animaux à bien été créée.

Maintenant migrer la migration Versions20220502154635.php:

	$ symfony console doctrine:migration:migrate
	


---


##### 4.27. Insertion des données (Fixtures)

(cf. screenshots)

Dans cette partie nous allons remplir la BD que nous avons créée précedemment et de remplir la table animal. 

Pour ce faire on va devoir créer une "fixture" dans Symfony qui est en fait un package (service) supplémentaire qui va permettre de générer des jeux de données.

Pour installer ce service supplémentaire utilisez la commande 'composer requrire orm-fixtures --dev'
et le mettra seulement en "dev" cad dans l'environnement de developpement sur lequel on est pour le moment car ce composant ne sera pas utile et utilisable dans la production. Donc ça va nous servir ici pour alimenter notre base de donnée.

En lançant cette commande nous aurons un nouveau dossier qui va apparaître qui sera les "DataFixtures" et nous aurons un premier fichier "AppFixtures.php". 

On pourra également créer un fichier spécialisé pour créer des fixtures sur nos animaux avec la commande 'symfony console make:fixtures AnimalFixtures'. Ainsi nous aurons un nouveau fichier que nous irons remplir et qui va nous permettre de générer l'ensemble de nos animaux. 

Dans ce fichier nous irons créer l'ensemble de nos animaux (5) et nous utiliserons la class, l'entity, que nous avons créée dans notre précédent chapitre. 

Une fois que nous aurons créé un animal avec ses informations (nom, description, image) il faudra 
indiquer au "manager" cad l'outil qui va permettre de gérer la partie persistance des données entre la BD et nos Entity que nous avons rajouté un nouvel objet animal. Une fois que cette animal ($a1) à été "persisté" nous allons pouvoir créer un nouvel objet animal. 

Il restera à lancer tous nos animaux dans la BD, la mise à jour, en lançant la commande '$manager->flush();'

Donc le "persist()" permet de préparer les requêtes qui seront réalisées et le "flush()" permet de mettre à jour la BD en exécutant les requêtes. 


1. Créer le dossier DataFixtures et le fichier AnimalFixtures.php 

	$ composer require orm-fixtures --dev
	
Nous avons donc maintenant dans ce dossier nouvellement créé le fichier AppFixtures.php. Donc on pourrait réaliser toutes nos actions dans ce fichier mais nous pouvons créer nous même un fichier 'fixtures'  en utilisant la commande suivante:

	$ symfony console make:fixture [entity-name]Fixtures
	$ symfony console make:fixture AnimalFixtures
	
Dans notre fichier vous pouvez voir que la fonction load() prend de base un "ObjectManager" $manager qui va nous servir à mettre à jour la BD. Cet ObjectManager est ici intégré dans la fonction et c'est ce que l'on appelle l'injection de dépendance. Cette fonction sait que l'on va récupérer un manager de type ObjectManager qui aura été appelé lors de la création de nos fixtures.

Nous allons maintenant créer l'ensemble de nos 5 animaux (Chien, Cochon, Serpent, Crocodile, Requin):

AnimalFixturess.php
	
	...
	$a1 = new Animal();
	$a1->setNom("Chien")
		->setDescription("Un animal domestique")
		->setImage("chien.png")
	;
	$manager->persist($a1);
	
	.
	.
	...

	$manager->flush();
	
	...
	
	
Maintenant lancez la création en BD en "loadant" la fixture avec la commande:

	$ symfony console doctrine:fixtures:load 

	 > purging database
   	 > loading App\DataFixtures\AnimalFixturesPhp
   	 > loading App\DataFixtures\AppFixtures

localhost/phpmyadmin

Nos animaux ont bien été généré dans la BD

##### 4.28. Page d'accueil (Routes)

Dans cette partie nous allons lister les animaux.

Commençons par incorporer les images d'animaux dans notre application. Créez une nouveau dossier "images" dans le dossier "public". Et y mettre toutes les images.

	$ mkdir public/images
	
public/images


Nous allons créer notre application comme on l'a fait dans notre premier module cad que l'on devra créer dans notre application un premier contrôleur et nous créerons notre première page de base pour accéder à cette application. On va aussi y intégrer bootsratp avec un design un peu différent en utilisant un thème de bootstrap nommé "sandstone" grâce au site https://bootswatch.com ce qui va nous permettre d'avoir quelques différences par rapport au boostrap de base notamment en terme de couleurs et sur différents affichages.

On fera en sorte également de générer notre menu. 


1. Créer la page d'accueil listant les animaux

1.1. Créer le contrôleur

Commençons par générer notre contrôleur:

	$ symfony console make:controller AnimalController
	
	 created: src/Controller/AnimalController.php
 	 created: templates/animal/index.html.twig

Par ailleurs pour faire une corrélation avec notre architecture MVC les deux fichiers générés sont réspectivement le Contrôleur et la Vue.

Nous avons précédemment créer la partie Modèle en créant l'Entity (Classe) et le Repository.

Nous sommes donc en train de mettre en place l'architecture MVC qui est facilitée grâce à Symfony.

Donc ici nous avons généré nos deux fichier et commençons par modifier notre contrôleur pour aller modifier notre route de base #[Route('/animal', name: 'app_animal')] car nous voulons allez directement dans notre page d'accueil. 

Alors on pourrait aussi générer un contrôleur de base s'appellant par exemple GlobalController.php mais nous le ferons plus tard dans une prochaine application. 

src/Controller/AnimalController.php

	...
	#[Route('/', name: 'animaux')]
	...


1.2. Réalisez la vue correspondante et lancer le serveur

Modifer le template:

templates/animal/index.html.twig

	...
	{% block title %}Page d'accueil{% endblock %}
	...
	
	<h1>Coucou</h1>
	...
	
Lancer le server:

	$ symfony server:start
	
---

	HTTP 500 Internal Server Error
	
	The metadata storage is not up to date, please run the sync-metadata-storage command to fix this issue.
	
	
[Learn how to solve this Symfony 6 exception when using a different database engine than specified on the database connection string.](https://ourcodeworld.com/articles/read/1645/how-to-solve-symfony-6-exception-the-metadata-storage-is-not-up-to-date-please-run-the-sync-metadata-storage-command-to-fix-this-issue)

In this article, I will explain you the cause of this exception and how to prevent it from appearing in your new project.

Solving out of sync metadata storage issue

The first thing you need to do is to run the following command to synchronize the metadata storage in your symfony application:

	$ symfony console doctrine:migrations:sync-metadata-storage
	
	  [OK] Metadata storage synchronized   
	  
This should solve the problem normally, but in my case it didn't. After some research, I found out that the problem was related to the database string connection in your .env file.

This problem is quite new as I didn't face this problem before. When I created a Symfony 5 project, the string connection for MySQL 5.7 and MariaDB used to work just well. However, in the new version, if you use MariaDB as the database engine instead of MySQL, using a MySQL connection string like the following one when using MariaDB:

DATABASE_URL="mysql://username:password@127.0.0.1:3306/db_name?serverVersion=5.7"

Will trigger the mentioned exception. So to fix this problem, I needed to search for the version of the MariaDB instance that I'm using right now in my local environment (I was able to determine the version graphically using PHPMyAdmin as I use XAMPP, alternatively you can obtain it from the CLI):


For more information about the database connection string, please refer to the official documentation of Symfony here. Knowing this, I was able to simply change the serverVersion parameter from the DATABASE_URL parameter like this:

DATABASE_URL="mysql://username:password@127.0.0.1:3306/db_name?serverVersion=mariadb-10.4.21"

And the project is now accessible without this tedious exception appearing everytime I try to access the database!

Happy coding ❤️!

.env

	DATABASE_URL="mysql://root:@127.0.0.1:3306/animaux?serverVersion=5.7&charset=utf8mb4"

Go to home of phpmyadmin and check Database server informations.


Database server

    Server: Localhost via UNIX socket
    Server type: MariaDB
    Server connection: SSL is not being used Documentation
    Server version: 10.4.22-MariaDB - Source distribution
    Protocol version: 10
    User: root@localhost
    Server charset: UTF-8 Unicode (utf8mb4)

So I replace in the .env file the MYSQL connection string server version by:

	DATABASE_URL="mysql://root:@127.0.0.1:3306/animaux?serverVersion=mariadb-10.4.22&charset=utf8mb4"

---
	
1.3. Utilisation d'un thème bootstrap

https://bootswatch.com

Choisir un theme. Puis pour l'utiliser vous pouvez le télécharger et l'incorporer dans vos fichiers, ça sera bien entendu dans le dossier "public", ou alors vous pouvez l'intégrer en utilisant simplement le lien de celui-ci. 

Clique droit sur le lien bootstrap.min.css et l'ouvrir dans un nouvel onglet. Ce qui va nous permettre d'avoir tout le code CSS qui et présent. Copier le chemin URL et le rajouter dans mon code à l'intérieur d'une balise HTML link dans le head de ma page base.html.twig

Note: J'ai choisi le theme "QUARTZ".

base.hmtl.twig

	...
	<link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css">
	...

Si j'actualise m'a page on aura un différence au niveau de l'affichage.

http://127.0.0.1:8000/

Ensuite pour intégrer le reste de Bootstrap on va aller le récupérer 

https://getbootstrap.com/docs/5.1/getting-started/introduction/

La partie Javascript qui va nous servir par exemple pour les drop-down dans notre menu etc..

Donc on utilise le CDN et on le met tout en bas du body de notre page base.html

	...
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	...

Maintenant que nous avons intrégré Bootstrap on va créer notre menu. Pour cela on va retourner sur le site Bootswatch.com, on va lancer le thème choisi en cliquant dessus pour ouvrir. 

https://bootswatch.com/quartz/

Ici vous pouvez voir tout le design qui correspond à ce que propose ce thème.

Donc prendre la partie du menu qui vous intéresse. Vous avez une petite icône à droite pour récupérer le code, cliquer dessus et vous pouvez le récupérer.

Ensuite, vous pouvez l'intégrer directement à l'endroit souhaité dans votre code de page base.html

On pourrait faire un autre fichier comme on l'a fait dans notre précédent projet. Mais en l'occurence on va simplement le mettre directement dans le fichier base.html

Ré-indenter et supprimer le formulaire qui ne nous intéresse pas. Remplacer les route par défaut (href="#") par le nom de notre route definie dans le contrôleur ainsi que les noms d'affichages par défaut.

base.html.twig

	...
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ path('animaux') }}">Animaux</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                         <a class="nav-link" href="{{ path('animaux') }}">Accueil</a>
                    </li>
                </ul>    
            </div>
        </div>
    </nav>
	...

Changer aussi le titre

animal/index.html.twig

	...
	<h1>Voici la liste des animaux</h1>
	...

Et pour reprendre ce que l'on avait fait dans le précédent module. On va créer le titre dans notre template de base en générant un nouveau "block" dans la base.html

base.html.twig

	...
	<h1>{% block monTitre %}{% endblock %}</h1>
	...
	
On va y rajouter quelques classes...
	
	...
	<h1 class="border border-dark rounded p-2 m-2 text-white bg-primary">{% block monTitre %}{% endblock %}</h1>
	...
	
Je peux maintenant utiliser ce block dans index.html

animal/index.html.twig

	...
	{% block monTitre %}Voici la liste des animaux{% endblock %}
	...

##### 4.29. Lister les animaux (Repository)

(cf. screenshots)

L'objectif de cette video va être de lister l'ensemble des animaux de notre application. Pour ce faire nous irons dans la partie Contrôleur et nous utiliserons notre Repository qui je vous le rappelle va nous permettre de récupérer les informations de la BD. 

Nous utiliserons celui-ci et nous utiliserons Doctrine pour aller récupérer notre Repository.

Ensuite nous utiliserons une des fonctions de base sur les repository comme nous l'avons vu dans une précédente video, nous utiliserons findAll() qui va permettre de récupérer tous les animaux. 

Une fois que nous aurons récupérer tous nos animaux, nous pourrons transmettre cette variable dans notre template qui se chargera d'afficher les animaux.


1. Utiliser le "Repository" pour récupérer les données:

Dans le fichier AnimalController on va récupérer les informations de la BD en utilisant notre Repository 

AnimalController.php

	...
	$repository = $this->getDoctrine()->getRepository(Animal:class);
	...
	
---

getDoctrine() is depreciated since Symfony 5.4

[New alternative for getDoctrine() in Symfony 5.4 and up](https://stackoverflow.com/questions/70211690/new-alternative-for-getdoctrine-in-symfony-5-4-and-up)

[New in Symfony 5.4: Controller Changes](https://symfony.com/blog/new-in-symfony-5-4-controller-changes)



As mentioned [here](https://symfony.com/blog/new-in-symfony-5-4-controller-changes):

    Instead of using those shortcuts, inject the related services in the constructor or the controller methods.

You need to use dependency injection.

For a given controller, simply inject ManagerRegistry on the controller's constructor.


use Doctrine\Persistence\ManagerRegistry;

class SomeController {

    public function __construct(private ManagerRegistry $doctrine) {}

    public function someAction(Request $request) {
        // access Doctrine
        $this->doctrine;
    }
} 

---

AnimalController.php

	...
	public function __construct(private ManagerRegistry $doctrine) 
    {
        $this->doctrine = $doctrine;
    }
    ...
    
    $repository = $this->doctrine->getRepository(Animal::class);
    $animaux = $repository->findAll();

        return $this->render('animal/index.html.twig', [
            "animaux" => $animaux,
        ]);
    
	...
	
template/animal/index.html.twig

	...
	{% for animal in animaux %}
        {{ animal.nom }}
    {% endfor %}
    ...
    
Et la nous avons bien l'ensemble des noms de nos animaux qui s'affiche sur la page animal/index.html.twig

localhost:8000

On va réaliser un petit peu de design pour avoir un affichage correct au niveau de nos animaux en utilisant du Bootstrap.

	...
	{% for animal in animaux %}
		<div class="row align-items-center">
			<img src="{{ asset('images/' ~ animal.image) }}"
		</div>
        {{ animal.nom }}
    {% endfor %}
    ...

---

An exception has been thrown during the rendering of a template ("Asset manifest file "/home/thecoderush/Documents/Udemy/creer-4apps-Sf4/2-animaux/public/build/manifest.json" does not exist. Did you forget to build the assets with npm or yarn?").


[Symfony Error: "An exception has been thrown during the rendering of a template"](https://stackoverflow.com/questions/51393459/symfony-error-an-exception-has-been-thrown-during-the-rendering-of-a-template)



I have resolved this problem by not using json_manifest_path: ~

comment out the json_manifest_path by adding '#' in front of it and add '~' after 'assets:'

framework:
    assets: ~
        #json_manifest_path: '%kernel.project_dir%/public/build/manifest.json'


config/packages/webpack_config

	framework:
    	assets: ~
        	#json_manifest_path: '%kernel.project_dir%/public/build/manifest.json'
---

template/animal/index.html.twig

	...
	<div class="col-2 text-center">
        <img src="{{ asset('images/' ~ animal.image) }}">
    </div>
    <div class="col-auto">
        <h2>{{ animal.nom }}</h2>
        <div>{{ animal.description }}</div>
    </div>
	...

127.0.0.1:8000

Avant de passer à la suite on va faire une dernière modification au niveau de notre code et on va utiliser l'injection de dépendance qui permet de récupérer des objets différents dans nos fonctions et qui va réduire le nombre de code que l'on va écrire.

(cf. screenshots)

Donc si je prend exemple sur ce que l'on à fait pour le moment, on a récupérer notre répository sur notre classe animal. (avant modification personnel car exception levé pour cause de getDoctrine() is depreciated since Symfony 5.4)

AnimalController.php

	...
	$repository = $this->getDoctrine()->getRepository(Animal:class);
	...
	
Cette ligne on n'a pas besoin de la faire avec Symfony, il suffit d'utiliser l'injection de dépendance, c'est à dire que dans les paramètres de la fonction index() on va écrire directement ce que l'on veut récupérer. 

Donc on ajoute la variable $repository et on indique que c'est un AnimalRepository.
De base Symfony sait que l'on veut récupérer un $repository de la classe Animal que l'on pourra utiliser directement.

Note: C'est exactement ce que l'on à fait précédement pour résoudre l'exception qui à été levé mais sans avoir besoin de créer le constructeur que l'on a ajouté d'après la solution proposé sur Stackoverflow.

AnimalController.php

	use App\Repository\AnimalRepository;
    ...
    
	public function index(AnimalRepository $repository)
	{	
    	$animaux = $repository->findAll();
        
		return $this->render('animal/index.html.twig', [
            "animaux" => $animaux,
        ]);
    }
	...

##### 4.30. Modification d'un entité

Dans cette video nous allons rajouter deux champs dans la BD sur la table Animal pour pouvoir disposer d'un "poids" qui sera de type Entier et nous aurons également un booléen "dangereux" qui permettra d'indiquer si un animal est dangereux ou non.

Pour ce faire on utilisera Doctrine et on pourra utiliser la même commande que nous avons utlisé pour créer l'entité Animal. Ici quand on relancera la même commande Symfony détectera que l'entité Animal existe et proposera de rajouter des champs dans cette entité. 

Il faudra ensuite réaliser une migration à nouveau pour rajouter nos deux nouveaux champs dans la BD et pour éviter d'avoir des problèmes lors de la migration on fera en sorte de vider celle-ci. 

Dans un seccond temps, on completera les fixtures pour rajouter les deux nouveaux champs et saisir des informations pour nos animaux. 

Là aussi il faudra apporter les modifications en base de données et pour se faire on relancera les fixtures.


1. Ajouter deux champs dans l'entitté "animal"
2. Vider la base de données manuellement (pour éviter des problèmes lors de la migration)
3. Lancer la migration
4. Ajouter des données dans les "Fixtures" pour créer les animaux avec ces nouvelles informations.
5. Envoyer les données dans la BD et tester si tout fonctionne encore.
 

1. Ajouter deux champs dans l'entitté "animal"

		$ symfony console make:entity Animal

		 updated: src/Entity/Animal.php
		  
		  Success! 

2. Vider la base de données manuellement (pour éviter des problèmes lors de la migration)

localhost/phpmyadmin

Remarque: on aurait pu faire un petit programme qui permettait de modifier les informations des animaux déjà existant 

3. Lancer la migration

Maintenant que nous avons vidé la BD on peut lancer la migration pour rajouter nos champs sans risquer d'avoir des valeur null dans nos nouveau champs. 

	$ symfony console make:migration

	 Success! 
           

 	 Next: Review the new migration "migrations/Version20220511143354.php"
     Then: Run the migration with php bin/console doctrine:migrations:migrate

Ce qui nous a généré un deuxième fichier de migration. 

	$ symfony console doctrine:migration:migrate

	 [notice] Migrating up to DoctrineMigrations\Version20220511143354
	 [notice] finished in 29.3ms, used 20M memory, 1 migrations executed, 1 sql queries

Dans la table animal nous avons bien nos deux nouveaux champs.

localhost/phpmyadmin

4. Ajouter des données dans les "Fixtures" pour créer les animaux avec ces nouvelles informations.

AnimalFixtures.php

	...
	->setPoids(10)
	->setDangereux(false)
	...
	
	.
	.
	.

5. Envoyer les données dans la BD et tester si tout fonctionne encore.

	$ symfony console doctrine:fixtures:load

	 Careful, database "animaux" will be purged. Do you want to continue? (yes/no) [no]:
 	 > yes

   	 > purging database
   	 > loading App\DataFixtures\AppFixtures

localhost/phpmyadmin
127.0.0.1:8000

##### 4.31. La page d'un animal

(cf. screenshot)

Dans cette video nous allons créer une nouvelle page permettant de lister les informations d'un animal.

Pour cela on devra créer une nouvelle route que nous allons appeler afficher_animal et qui ira pointer sur /animal

...

On ira rajouter le fait d'afficher les informations d'un animal en utilisant l'injection de dépendance que nous avons déjà vu pour rajouter le repository et il faudra ensuite récupérer l'animal. 

Pour ce faire on ira rajouter directement dans la route l'identifiant de celui-ci 

	#[Route('/'animal/{id}, name: 'afficher_animal')]

que l'on pourra directement récupérer au niveau de notre fonction, et à partir de notre repository on pourra utiliser la fonction find($id) 

Enfin Symfony met à disposition la fonctionnalité du "parameter converter" qui va permettre d'aller récupérer directement un objet eet ici on indiquera que notre fonction va récupérer un animal.

Ainsi à partir de cette fonctionnalité la, l'identifiant qui est transmis au niveau de la route sera converti directement en entité animal à partir de cet id. 
Donc cela ira récupérer l'animal qui dispose de cet id. Ce qui permettra très rapidement de récupérer les informations de notre animal sans rajouter une quelconque ligne liée au repository. 

Ainsi on pourra transmettre les informations à notre vue et enfin les afficher.


1. Créer la route et l'affichage de base de la page
2. Lister les informations de l'animal

---

1. Créer la route et l'affichage de base de la page

AnimalController.php

	...
	[Route('/animal/', name: 'afficher_animal')]
    public function afficherAnimal(): Response
    {
        return $this->render('animal/afficherAnimal.html.twig');
    }
	...

Créer le nouveau template 

templates/animal/afficherAnimal.html.twig

	...
	{% block title %}Affichage de l'animal{% endblock %}

	{% block monTitre %}Affichage de l'animal{% endblock %}
	...

127.0.0.1:8000/animal

On va maintenant rajouter un lien pour chaque animal afin nous puissions accéder à une nouvelle page pour chaque un animal. 

On va rendre cliquable le nom de chaque animal et on enverra l'identifiant de l'animal dans notre lien.

Je vais donc créer une balise anchor dans notre templage index.html au niveau di nom de l'animal. Il faut mettre le chemin dans le href="" qui sera du Twig en utilisant la fonction path() en lui indiquant la route souhaité ainsi que l'identifiant de l'animal. 

Je vous rappelle que pour cela on utlise un objet au format JSON dans lequel on indique que l'on veut transférer l'identifiant (id) et au va y mettre sa valeur qui sera animal.id 

templates/animal/index.html.twig

	<h2><a href="{{ path('afficher_animal', {'id' : animal.id }) }}">{{ animal.nom }}</a></h2>

En faisant ainsi on va pouvoir récupérer cette information au niveau du contrôleur sur notre route afficher_animal et pour cela on indique simplement à la suite que l'on veut l'identifiant à la route et on le récupère dans la fonction.

AnimalController.php

	...
	[Route('/animal/{id}', name: 'afficher_animal')]
    public function afficherAnimal($id): Response
	...

En faisant ainsi on va déjà tester si on récupère bien cet id

	...
	echo "ID: " . $id;
	...

Maintenant il faut transformer cet identifiant pour récuéprer l'animal et envoyer les informations à la vue pour qu'elle puisse afficher l'animal.

	...
	public function afficherAnimal(AnimalRepository $repository, $id): Response
    {
        $animal = $repository->find($id);
		return $this->render('animal/afficherAnimal.html.twig', [
		    "animal" => $animal,
		]);
	}
	...

En faisant ainsi on va pouvoir modifier notre template

templates/animal/afficherAnimal.php

	...
	{% block monTitre %}Affichage de l'animal {animal.nom}{% endblock %}
	...

https://127.0.0.1:8000/animal/6


Je vais utiliser le "Parameter Converter"  en supprimant ce que nous venons de faire dans les paramètres de notre fonction afficherAnimal() et les remplacer par Animal $animal. 

Donc en indiquant directement la classe, ici Symfony sait que à partir de l'identifiant qui est mis dans la route on va récupérer un animal qui dispose de cet identifiant. 

Je peux donc supprimer également l'utilisiation du repository.

AnimalController.php

	...
	use App\Entity\Animal;

	...
	public function afficherAnimal(Animal $animal): Response
	...

https://127.0.0.1:8000/animal/6


2. Lister les informations de l'animal

Maintenant on va réaliser l'affichage dans notre page afficherAnimal.html

afficherAnimal.html.twig

	...
	<div class="row align-items-center">
        <div class="col-2 text-center">
            <img src="{{ asset('images/' ~ animal.image) }}">
        </div>
        <div class="col-auto">
            <div>Description: {{ animal.description }}</div>
            <div>Poids: {{ animal.poids }}</div>
            <div>Dangereux: 
                {% if animal.dangereux %}
                    <span class="badge bg-danger">oui</span>
                {% else %}
                    <span class="badge bg-success">non</span>
                {% endif %}
            </div>
        </div>
    </div>
	...

https://127.0.0.1:8000/animal/6
https://127.0.0.1:8000/animal/8


##### 4.32. Famille : Relation 1.1 - 1.n

(cf. screeshots)

Dans cette video nous allons rajouter une nouvelle table "Famille" qui va permettre de rajouter une catégorie pour nos animaux cad que une animal disposera d'une famille par exemple s'il fait partie des reptiles, des poissons, etc...

Voir MCD

Nous avons déjà notre table Animal. On va créer notre table Famille qui disposera d'un "Libelle" et d'une "Description". 

Ensuite on créera un lien entre ces deux tables en faisant une associtation qui sera de type 1,1 - 1,n  

Avec Symfony et Doctrine on va utiliser une nouvelle fois la ligne de commande et commencer par créer l'entité Famille. 

Cependant, lorsque nous aurons créé nos deux champs "Libelle" et "Description" il faudra rajouter un nouveau champ permettant d'accéder aux informations de nos animaux. Comme on l'a dit une Famille dispose de plusieurs animaux. Dans ce cas, on aura un champ à l'intérieur qui sera rajouté qui permettra de lister l'ensemble des animaux d'une famille.

Parmis les questions que nous aurons à ce moment là il faudra indiquer que nous voulons un nouveau champ dans la table Animal permettant d'avoir sa famille associée. 

Comme nous l'avons dit un animal dispose d'une famille, du coup nous aurons un champ famille qui sera présent dans la table et qui permettra de faire directement le lien pour l'animal avec sa famille.

Ainsi nous créerons deux liens. Dans Famille nous aurons la liste des animaux qui dispose de la famille et dans l'Animal nous saurons à quelle famille appartient cet animal. 


1. Ajout d'une table famille pour classifier nos animaux
2. Créer l'Entity "Famille"
3. Ajouter un champ "Animaux" de type relation (OneToMany)
4. Ajout du champ dans la table "animal" (clef étrangère)

On apportera ensuite les modifications au niveau de la BD

5. Une "ArrayCollection" rajoute des méthodes à la gestion des tableaux classiques de PHP
6. Vider la BD avant de lancer la migration (à cause du nouveau champ)
7. Réaliser la migration pour créer la nouvelle "Entity"

Et nous ferons en sorte de réaliser une fixture permettant de remplir les familles.
Et à chaque fois pour chaque animal on indiquera la famille correspondante.

8. Remplissage de la BD : Fixtures

---

1. Ajout d'une table famille pour classifier nos animaux
2. Créer l'Entity "Famille"

	$ symfony console make:entity [entity-name]
	$ symfony console make:entity Famille

	 created: src/Entity/Famille.php
 	 created: src/Repository/FamilleRepository.php

Ajouter les trois propriétés

	libelle
	string
	255
	no

	description
	text
	nullable

3. Ajouter un champ "Animaux" de type relation (OneToMany)

Propriété Relationships / Associations

	animaux
	relation

4. Ajout du champ dans la table "animal" (clef étrangère)
	
	Animal
	OneToMany
	famille
	no
	no

	 updated: src/Entity/Famille.php
	 updated: src/Entity/Animal.php

Note: Normalement nullable no, mais cela aura une répercussion au niveau de la BD parce que si vous disposez déjà des données à l'intérieur vous allez avoir qq problèmes lorsque vous allez réaliser la migration. 
Le plus simple et le plus facile à mettre en place c'est de laisser à YES pour ne pas avoir de problèmes lors de la modification. 
Je vais ici passer à NO puisque nous allons vider la BD avant de faire la migration. 

Il me demande ensuite si je veux automatiquement supprimer les orphelins animaux cad qu'il n'auraient plus de famille en l'occurence ici NO

Dans Entity/Famille.php on peut voir que le champs créé $animaux est de type ArrayCollection

5. Une "ArrayCollection" rajoute des méthodes à la gestion des tableaux classiques de PHP

C'est un tableau un peu plus avancé que ce qui est proposé par PHP et qui dispose de plus de fonctionnalités. On verra cela un peu plus tard.

Au niveau de notre table Animal, Enity/Animal.php on va regarder la modification qui à été apportée et on peut voir que nous avons bien un nouveau champ $famille qui permet de faire la jointure entre les deux tables. Ce sera donc notre clé étrangère faisant le lien avec la table famille. Nous avons bien entendu à la fin du fichier le getter et le setter associé.


6. Vider la BD avant de lancer la migration (à cause du nouveau champ)

localhost/phpmyadmin

7. Réaliser la migration pour créer la nouvelle "Entity"

	$ symfony console make:migration

	           
	  Success! 
           

	 Next: Review the new migration "migrations/Version20220512150638.php"
	 Then: Run the migration with php bin/console doctrine:migrations:migrate


	$ symfony console doctrine:migration:migrate

	 [notice] Migrating up to DoctrineMigrations\Version20220512150638

localhost/phpmyadmin


8. Remplissage de la BD : Fixtures

Important: Il va falloir d'abord créer nos Famille avant de les rajouter à nos animaux.

DataFixtures/AnimalFixtures.php

	...
	use App\Entity\Famille;
	
	...
	
	/**
     *  Création des Familles 
     */
    
	$c1 = new Famille();
    $c1->setLibelle("mammifères")
        ->setDescription("Animaux vertébrés nourissant leurs petits avec du lait")
    ;
    $manager->persist($c1);

	.
	.
	.

	/**
    *  Création des Animaux  
    */

	...
		 ->setFamille($c1)
	;

	.
	.
	.
	.


Charger les nouvelles données

	$ symfony console doctrine:fixtures:load

	 > purging database
	 > loading App\DataFixtures\AnimalFixtures

##### 4.33. Famille : Affichage
##### 4.34. Famille : lister les animaux
##### 4.35. Continent : Relation 1.n - 1.n
##### 4.36. Lister les continents
##### 4.37. La page d'un continent et les routes
##### 4.38. Personnes - Relation 1.n - 1.n avec propriété
##### 4.39. Affichage des personnes et des animaux
