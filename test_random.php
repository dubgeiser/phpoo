<?php
require 'vendor/autoload.php';

use Trump\Api;


$api = new Api();
echo $api->getRandomQuote(), "\n";
