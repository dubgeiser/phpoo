<?php

namespace Test\Quotes;

use PHPUnit\Framework\TestCase;

use Quotes\AttributableQuote;
use Quotes\Author;

class QuoteTest extends TestCase
{
    private $quote;

    public function setUp()
    {
        $this->quote = new AttributableQuote('TEST', new Author('Per'));
    }

    public function testToString()
    {
        $this->assertContains('TEST', (string) $this->quote);
        $this->assertContains('Per', (string) $this->quote);
    }
}
