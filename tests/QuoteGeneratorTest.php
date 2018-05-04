<?php

namespace Test\Quotes;


use PHPUnit\Framework\TestCase;
use Quotes\QuoteGenerator;


class QuoteGeneratorTest extends TestCase
{
    public function testTrumpQuotes()
    {
        $g = new QuoteGenerator(new \Quotes\Trump\QuoteSource());
        $this->assertInstanceOf('Quotes\Quote', $g->randomQuote());
    }
}
