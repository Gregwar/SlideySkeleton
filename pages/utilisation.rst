.. slide:: middleSlide

Utilisation de Slidey
=====================

.. slide::

#=) Téléchargement et installation
----------------------------------

Le plus simple est de commencer par télécharger le squelette de
projet Slidey (ou **SlideySkeleton**), qui est en faite cette documentation
elle-même

Pour cela, vous pouvez :

* `Télécharger la dernière version (.tar.gz) <https://github.com/Gregwar/SlideySkeleton/archive/master.tar.gz>`_
* `Télécharger la dernière version (.zip) <https://github.com/Gregwar/SlideySkeleton/archive/master.zip>`_
* Cloner le `dépôt git <https://github.com/Gregwar/SlideySkeleton/>`_
* Utiliser composer~:

.. code-block:: txt
    composer create-project gregwar/slidey-skeleton

Si vous n'avez pas créé le projet avec composer, n'oubliez pas de l'utiliser pour télécharger les
dépendances :

.. code-block:: txt
    composer update

.. slide::

#=) Compilation
---------------

Compiler
~~~~~~~~

Le fichier ``build.php`` sert à expliciter simplement les actions à effectuer pour créer
le document.

**SlideySkeleton** vous propose également un ``Makefile`` très bref, vous pouvez donc 
compiler la documentation d'exemple en tappant simplement~:

.. code-block:: txt
    make

Le build sera fait dans le dossier ``web/``, ce qui est le comportement par défaut, mais
cela peut être modifié en donnant un argument à la fonction ``$slidey->build();``.

.. slide::

Options du build
~~~~~~~~~~~~~~~~

Vous pouvez utiliser~:

* ``$slidey->addCss('css/style.css');`` Ajoute une feuille de style
* ``$slidey->copy('css/');`` Recopie un dossier depuis le dossier des sources vers le dossier du build, ici, le dossier ``css/`` sera alors dupliqué dans le build

.. slide::

Utilisation de la compilation
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

En exécutant le script ``build.php``, ou à l'aide du ``Makefile`` fournit, vous pourrez alors :

* ``make`` Lance la compilation et génère le document
* ``make clean`` Détruit la compilation
* ``make redo`` Détruit puis relance la compilation

.. slide::

#=) Navigation et utilisation
-----------------------------
    
Chaque slide est identifiable à partir du support à l'aide du numéro visible à la droite. 

Il est possible de naviguer de slide en slide en utilisant les flèches haut et bas, mais les
éléments qui se découvrent progressivement ne seront alors pas pris en compte, pour cela, vous
pouvez utiliser les flèches gauche et droite.
