<?php
require __DIR__ . '/vendor/autoload.php';

use Trump\Api;


$api = new Api();
echo $api->getRandomQuote(), "\n";
echo $api->getPersonalizedQuote('Per'), "\n";
