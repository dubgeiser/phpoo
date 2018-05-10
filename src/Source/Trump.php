<?php

declare(strict_types=1);

namespace Quotes\Source;

use Quotes\Author;

use function file_get_contents;
use function json_decode;

/**
 * Wraps calls to the public whatdoestrumpthink.com API.
 */
class Trump implements Source
{
    /** @var string The url of the api. */
    private $url;

    /** @var int The version of the api */
    private $version;

    /** @var Author */
    private $author;

    /**
     * @param string $url     (optional) The URL of the API
     * @param int    $version (optional) The version of the API.
     */
    public function __construct(string $url = 'https://api.whatdoestrumpthink.com/api', int $version = 1)
    {
        $this->url     = $url;
        $this->version = $version;
        $this->author  = new Author('Trump');
    }

    /**
     * {@inheritDoc}
     */
    public function all() : array
    {
        return json_decode($this->doRequest('quotes'))
            ->messages->non_personalized;
    }

    /**
     * {@inheritDoc}
     */
    public function author() : Author
    {
        return $this->author;
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
