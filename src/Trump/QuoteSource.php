<?php

declare(strict_types=1);

namespace Quotes\Trump;

use function file_get_contents;
use function json_decode;
use function urlencode;

use Quotes\AttributableQuote;
use Quotes\Author;
use Quotes\Message;
use Quotes\Quote;

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
     * @param string $url     (optional) The URL of the API
     * @param int    $version (optional) The version of the API.
     */
    public function __construct(string $url = 'https://api.whatdoestrumpthink.com/api', int $version = 1)
    {
        $this->url     = $url;
        $this->version = $version;
    }

    /**
     * @return Quote A random Trump quote.
     */
    public function getRandomQuote() : Quote
    {
        return new AttributableQuote(
            new Message($this->getMessage('quotes/random')),
            new Author('Trump')
        );
    }

    /**
     * @param string $name The name to whom the quote should be addressed.
     * @return Quote A personalized Trump quote.
     */
    public function getPersonalizedQuote(string $name) : Quote
    {
        return new AttributableQuote(
            new Message(
                $this->getMessage('quotes/personalized?q=' . urlencode($name))
            ),
            new Author('Trump')
        );
    }

    /**
     * @return string[] List of all Trump quotes.
     *
     * TODO Must be list of Quote's or a QuoteList or something.
     */
    public function getAllRandomQuotes() : array
    {
        return json_decode($this->doRequest('quotes'))->messages->non_personalized;
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
