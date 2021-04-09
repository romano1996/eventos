<?php

/**
 * Eventos ----
 *
 * Author: Romano Schoonheim <romano@romanoschoonheim.nl>
 */

$autoloadPath =  __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoloadPath)) {
    throw new Exception(
        'The composer autoloader was not found.'
    );
}

require_once __DIR__ . '/../vendor/autoload.php';





