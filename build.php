<?php

include('vendor/autoload.php');

/**
 * Include here your custom libraries
 */

$slidey = new Gregwar\Slidey\Slidey;

$slidey
    ->addCss('css/style.css')    // Adding style.css
    ->setTitle('Slidey')         // Sets the title prefix
    ->enableInteractive('admin') // Enabled the interactive mode
    ->copy('css')                // Copy the css directory to the target
    ;

// Runs the build to the web directory
$slidey->build('web');
