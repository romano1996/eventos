<?php

/**
 *  Eventos - php event driven framework.
 *
 *  @author Romano Schoonheim <romano@romanoschoonheim.nl>
 *  @website https://www.eventos-php.com/
 */

use Core\Eventos;

$autoloadPath =  __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoloadPath)) {
    throw new Exception(
        'The composer autoloader was not found.'
    );
}

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Eventos();







