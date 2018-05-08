<?php

namespace Test\Quotes;

use PHPUnit\Framework\TestCase;
use Quotes\Strategy\Last;
use Quotes\QuoteGenerator;
use Quotes\Strategy\Random;
use Quotes\Source\Kanye;
use Quotes\Source\Trump;

class QuoteGeneratorTest extends TestCase
{
    public function testDifferentQuoteSources()
    {
        $g = new QuoteGenerator(new Trump());
        $this->assertNotEmpty((string)$g->retrieve(new Random()));
        $g->setSource(new Kanye());
        $this->assertNotEmpty((string)$g->retrieve(new Random()));
    }

    public function testLastQuoteStrategy()
    {
        $g = new QuoteGenerator(new Trump());
        $g->setSource(new Trump());
        $strategy = new Last();
        $lastQuote1 = $g->retrieve($strategy);
        $lastQuote2 = $g->retrieve($strategy);
        $this->assertEquals($lastQuote1, $lastQuote2);
    }
}
