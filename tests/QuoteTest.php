<?php

namespace Test\Trump;

use PHPUnit\Framework\TestCase;

use Trump\AttributableQuote;
use Trump\Author;
use Trump\Message;

class QuoteTest extends TestCase
{
    private $quote;

    public function setUp()
    {
        $this->quote = new AttributableQuote(new Message('TEST'), new Author('Per'));
    }
    public function testToString()
    {
        $this->assertContains('TEST', (string) $this->quote);
        $this->assertContains('Per', (string) $this->quote);
    }
}
