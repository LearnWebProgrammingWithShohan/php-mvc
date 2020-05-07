<?php

require 'Models/Mobile.php';
require 'Models/Accessory.php';

$walton = new Mobile('Walton Primo N', 7000, 7800);
$tamparedGlass = new Accessory('5D Tampared Glass', 30, 100);

var_dump($walton);
var_dump($tamparedGlass);