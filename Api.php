<?php



class Api
{
    private $url = 'https://api.whatdoestrumpthink.com/api';
    private $version = 1;

    public function getRandomQuote()
    {
        return json_decode($this->doRequest('quotes/random'))->message;
    }

    private function doRequest($method)
    {
        return file_get_contents($this->buildRequestUrl($method));
    }

    private function buildRequestUrl($method)
    {
        return $this->url . '/v' . $this->version . '/' . $method;
    }
}
