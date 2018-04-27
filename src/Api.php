<?php
namespace Trump;


/**
 * Wraps calls to the public whatdoestrumpthink.com API.
 */
class Api
{
    private $url;
    private $version;

    /**
     * @param string[optional] $url The URL of the API
     * @param int[optional] $version The version of the API.
     */
    public function __construct($url = 'https://api.whatdoestrumpthink.com/api', $version = 1)
    {
        $this->url = $url;
        $this->version = $version;
    }

    /**
     * @return string A random Trump quote.
     */
    public function getRandomQuote()
    {
        return json_decode($this->doRequest('quotes/random'))->message;
    }

    /**
     * @param string $method The method to call on the API.
     * @return string The repsonse of the request as a JSON string.
     */
    private function doRequest($method)
    {
        return file_get_contents($this->buildRequestUrl($method));
    }

    /**
     * @param string $method The method that we are going to call on the API.
     * @return string The full url that can be GET'd.
     */
    private function buildRequestUrl($method)
    {
        return $this->url . '/v' . $this->version . '/' . $method;
    }
}
