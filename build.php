<?php

include('vendor/autoload.php');

/**
 * Include here your custom libraries
 */

$slidey = new Gregwar\Slidey\Slidey;

/**
 * Customizing template
 */

// Setting main title prefix
$slidey->template->set('mainTitle', 'My title');

// Adding a CSS stylesheet
$slidey->template->addCss('css/style.css');

// Including a license in the footer
$slidey->template->set('footer', file_get_contents('license.htm'));

// Enable the interactive mode
$slidey->enableInteractive('admin');

/**
 * Adding custom directories
 */

// This will copy the directory "css" to the target directory
$slidey->copy('css');

// Runs the build to the web directory
$slidey->build();
