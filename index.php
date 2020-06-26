<?php

require __DIR__ . '/vendor/autoload.php';

use AKazak\FileReader\Reader;

$reader = new Reader();

$entities = $reader->getInfo(__DIR__ . '/to_upload.json', ['login', 'firstname', 'lastname', 'email']);

foreach ($entities as $entity) {
    $line = '';
    foreach ($entity as $fieldName => $value) {
        $line .= "$fieldName: $value, ";
    }
    echo rtrim($line, ', ') . PHP_EOL;
}