<?php
require_once __DIR__ . '/../src/Shirt.php';

use Mattsmithdev\Shirt;

$shirt1 = new Shirt();
$shirt2 = new Shirt();

print "shirt 1 type = {$shirt1->getType()}";