.. slide:: middleSlide

Introduction
============

.. slide::

#=) Qu'est-ce que Slidey ?
----------------------

Présentation
~~~~~~~~~~~~

**Slidey** est un outil de génération de documents que l'on pourrait
comparer à `Sphinx <http://sphinx-doc.org/>`_ ou 
`LaTeX <http://www.latex-project.org/>`_ . Le but de ce système est:

.. discoverList::
* De permettre de mélanger support et slides pour les présentations
* De n'utiliser que des technologies web (HTML, JS, PHP)
* D'être léger et facile à utiliser

.. textOnly::
    **Slidey** est conçu pour être adapté à la création de support de cours, de
    documentation ou de présentation (conférence...). L'interêt majeur étant d'éviter
    de faire doublon entre le support exhaustif et la présentation faite à l'oral, en utilisant
    un mélange hybride des deux.

.. slide::

#=) Technologies
------------

**Slidey** se base sur plusieurs bibliothèques, dont :

* `GeSHi <http://qbnz.com/highlighter/>`_ , colorisation syntaxique de code
* `Gregwar/Tex2png <https://github.com/Gregwar/Tex2png>`_ qui permet d'écrire des formules mathématiques
* `Gregwar/Image <https://github.com/Gregwar/Image>`_ , bibliothèque de manipulation d'images

.. slide::

#=) Comment ça marche ?
-------------------

**Slidey** fonctionne par exploration récursive afin de construire l'arborescence
de votre document.
    
Ensuite, votre document est entièrement «applati» et des pages **HTML** portables
(c'est à dire non dépendante de **PHP**) sont générées. Le concept est ressemblant à
celui de Sphinx. Il est intéréssant car il permet:

* De disposer d'un résultat ne nécéssitant pas de serveur web pour être lu (transportable et lisible sur clé USB par exemple)
* De profiter d'un gain de performances, car les fichiers ainsi générés sont entièrement statiques
* De séparer les sources et leur mise à jour du déploiement (système facile et élégant à mettre en place sur un serveur)
    
Pour découvrir en détails le fonctionnement de **Slidey**, rendez-vous à la rubrique: :doc:`/utilisation`

.. slide::

#=) Licence
-------

**Slidey** est sous licence **MIT**
    
Cependant, les documents faits avec **Slidey** eux-même peuvent bien entendus être
soumis à d'autre modèles de licence moins permissives.

