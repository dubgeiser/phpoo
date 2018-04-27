<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Trump\Api;

$api = new Api();
echo $api->getRandomQuote(), "\n";
echo $api->getPersonalizedQuote('Per'), "\n";

foreach ($api->getAllRandomQuotes() as $quote) {
    echo $quote, "\n";
}
