<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

// Para usar libreria FPDF
$classMap = array(
    'Fpdf_' => __DIR__.'/../vendor/royopa/fpdf-symfony2/lib/FPDF/FPDF.php',
    'Fpdi_' => __DIR__.'/../vendor/royopa/fpdf-symfony2/lib/FPDF/FPDI.php',
    'FOS' => __DIR__.'/../vendor/bundles',
);
$loader->addClassMap($classMap);          
///


return $loader;
