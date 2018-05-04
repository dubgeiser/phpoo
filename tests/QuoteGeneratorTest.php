<?php

namespace Test\Quotes;

use PHPUnit\Framework\TestCase;
use Quotes\LastQuoteStrategy;
use Quotes\QuoteGenerator;
use Quotes\RandomStrategy;

class QuoteGeneratorTest extends TestCase
{
    public function testDifferentQuoteSources()
    {
        $g = new QuoteGenerator(new \Quotes\Trump\QuoteSource());
        $this->assertRandomQuote($g);
        $g->setSource(new \Quotes\Kanye\QuoteSource());
        $this->assertRandomQuote($g);
    }

    public function testLastQuoteStrategy()
    {
        $g = new QuoteGenerator(new \Quotes\Trump\QuoteSource());
        $g->setSource(new \Quotes\Trump\QuoteSource());
        $strategy = new LastQuoteStrategy();
        $lastQuote1 = $g->retrieve($strategy);
        $lastQuote2 = $g->retrieve($strategy);
        $this->assertEquals($lastQuote1, $lastQuote2);
    }

    private function assertRandomQuote(QuoteGenerator $g)
    {
        $this->assertInstanceOf(
            'Quotes\Quote',
            $g->retrieve(new RandomStrategy())
        );
        $this->assertNotEmpty((string)$g->retrieve(new RandomStrategy()));
    }
}
