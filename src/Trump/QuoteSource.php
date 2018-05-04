<?php

declare(strict_types=1);

namespace Quotes\Trump;

use Quotes\AttributableQuote;
use Quotes\Author;
use Quotes\Message;
use Quotes\Quote;
use Quotes\QuoteStrategy;

/**
 * Wraps calls to the public whatdoestrumpthink.com API.
 */
class QuoteSource implements \Quotes\QuoteSource
{
    /**
     * @var string The url of the api.
     */
    private $url;

    /**
     * @var int The version of the api
     */
    private $version;

    /**
     * @var Author
     */
    private $author;

    /**
     * All the quotes.
     * @var array
     */
    private $quotes;

    /**
     * @param string $url     (optional) The URL of the API
     * @param int    $version (optional) The version of the API.
     */
    public function __construct(string $url = 'https://api.whatdoestrumpthink.com/api', int $version = 1)
    {
        $this->url     = $url;
        $this->version = $version;
        $this->quotes = json_decode($this->doRequest('quotes'))
            ->messages->non_personalized;
        $this->author = new Author('Trump');
    }

    /**
     * @return Quote A random Trump quote.
     */
    public function retrieve(QuoteStrategy $strategy) : Quote
    {
        $strategy->setAuthor($this->author);
        return $strategy->retrieve($this->quotes);



        return new AttributableQuote(
            new Message($this->getMessage('quotes/random')),
            new Author('Trump')
        );
    }

    /**
     * @param string $method The method to call on the API.
     * @return string The message of the json response of the given method.
     */
    private function getMessage(string $method) : string
    {
        return json_decode($this->doRequest($method))->message;
    }

    /**
     * @param string $method The method to call on the API.
     * @return string The repsonse of the request as a JSON string.
     */
    private function doRequest(string $method) : string
    {
        return file_get_contents($this->buildRequestUrl($method));
    }

    /**
     * @param string $method The method that we are going to call on the API.
     * @return string The full url that can be GET'd.
     */
    private function buildRequestUrl(string $method) : string
    {
        return $this->url . '/v' . $this->version . '/' . $method;
    }
}
