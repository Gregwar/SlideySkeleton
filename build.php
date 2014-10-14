<?php

include('vendor/autoload.php');

use Gregwar\Slidey\Slidey;

/**
 * Include here your custom libraries
 */

$slidey = Slidey::create();

// If you want to avoid unexisting directives/reference errors
$slidey->getErrorManager()->abortOnError(false);

$slidey
    ->setIndexName('Index')
    ->addCss('css/style.css')    // Adding style.css
    ->setTitle('Slidey')         // Sets the title prefix
    ->enableInteractive('admin') // Enabled the interactive mode
    ->copy('css')                // Copy the css directory to the target
    ->build('web')
    ;

