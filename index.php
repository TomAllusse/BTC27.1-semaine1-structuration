<?php

// Import les classes
// require_once 'mesClasses/Arme.php';
// require_once 'mesClasses/ArmeBlanche.php';

// require_once 'mesClasses/Arc.php';
// require_once 'mesClasses/Couteau.php';
// require_once 'mesClasses/Hache.php';

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class).'.php';
    if(file_exists($file)) require $file; /* require 'MonRPG/Materiel/Hache.php' */
});

use MonRPG\Materiel\Arme;
use MonRPG\Materiel\ArmeBlanche;
use MonRPG\Materiel\Hache;
use MonRPG\Materiel\Arc;

// Logique de notre code
$genericArme = new Arme();
$monHache = new Hache();
$monArc = new Arc();