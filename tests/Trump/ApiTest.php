<?php

declare(strict_types=1);

namespace Test\Quotes\Trump;

use PHPUnit\Framework\TestCase;
use \Quotes\Author;
use \Quotes\Message;
use \Quotes\Quote;
use \Quotes\Trump\Api;


/**
 * @coversDefaultClass \Quotes\Api
 * @covers ::<!public>
 */
class ApiTest extends TestCase
{

    /** @var \Quotes\Api */
    private $api;

    public function setUp()
    {
        $this->api = new Api();
    }

    public function tearDown() : void
    {
        $this->api = null;
    }

    /**
     * @covers ::getRandomQuote
     */
    public function testGetRandomQuote() : void
    {
        $quote = $this->api->getRandomQuote();
        $this->assertInstanceOf('Quotes\Quote', $quote);
        $this->assertNotEmpty((string)$quote);
    }

    public function testGetPersonalizedQuote() : void
    {
        $this->assertContains(
            'Per',
            (string)$this->api->getPersonalizedQuote('Per')
        );
    }

    public function testGetAllRandomQuotesReturnsAcoupleOfQuotes() : void
    {
        $this->assertTrue(count($this->api->getAllRandomQuotes()) > 2);
    }
}
