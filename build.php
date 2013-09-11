<?php

include('vendor/autoload.php');

/**
 * Include here your custom libraries
 */

$slidey = new Gregwar\Slidey\Slidey;

/**
 * Customizing template
 */

$slidey->addCss('css/style.css');

// Sets the title prefix
$slidey->setTitle('Slidey');

// Enable the interactive mode
$slidey->enableInteractive('admin');

/**
 * Adding custom directories
 */

// This will copy the directory "css" to the target directory
$slidey->copy('css');

// Runs the build to the web directory
$target = 'web';

if (count($argv) > 1) {
    if ($argv[1] == 'clean') {
        echo "Cleaning $target...\n";
        `rm -rf $target`;
        exit(0);
    }
}
$slidey->build($target);
