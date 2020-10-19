<?php
require __DIR__ . '/../vendor/autoload.php';

$helloworld = new App\Wcs\Hello();
echo $helloworld->talk();

