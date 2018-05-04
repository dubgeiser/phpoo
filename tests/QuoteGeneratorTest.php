<?php

namespace Test\Quotes;


use PHPUnit\Framework\TestCase;
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

    private function assertRandomQuote(QuoteGenerator $g)
    {
        $this->assertInstanceOf(
            'Quotes\Quote',
            $g->retrieve(new RandomStrategy())
        );
        $this->assertNotEmpty((string)$g->retrieve(new RandomStrategy()));
    }
}
