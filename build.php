<?php

include('vendor/autoload.php');

use Gregwar\Slidey\Slidey;

/**
 * Include here your custom libraries
 */

Slidey::create()
    ->addCss('css/style.css')    // Adding style.css
    ->setTitle('Slidey')         // Sets the title prefix
    ->enableInteractive('admin') // Enabled the interactive mode
    ->copy('css')                // Copy the css directory to the target
    ->mkDir('xxx')
    ->build('web')
    ;

