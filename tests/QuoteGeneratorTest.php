<?php

namespace Test\Quotes;


use PHPUnit\Framework\TestCase;
use Quotes\QuoteGenerator;


class QuoteGeneratorTest extends TestCase
{
    public function testTrumpQuote()
    {
        $g = new QuoteGenerator(new \Quotes\Trump\QuoteSource());
        $this->assertRandomQuote($g);
    }

    public function testKanyeQuote()
    {
        $g = new QuoteGenerator(new \Quotes\Kanye\QuoteSource());
        $this->assertRandomQuote($g);
    }

    private function assertRandomQuote(QuoteGenerator $g)
    {
        $this->assertInstanceOf('Quotes\Quote', $g->randomQuote());
        $this->assertNotEmpty((string)$g->randomQuote());
    }
}
