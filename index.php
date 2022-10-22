<?php

require __DIR__. '/vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Meow');

$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@ > JS ');

// or just echo the object for direct output
echo $bessie . PHP_EOL;