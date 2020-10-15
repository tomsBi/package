<?php

require_once 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid1();

printf(
    "UUID: %s\nVersion: %d\nDate: %s\nNode: %s\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion(),
    $uuid->getDateTime()->format('r'),
    $uuid->getFields()->getNode()->toString()
);

