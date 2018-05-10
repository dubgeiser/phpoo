<?php

namespace Test\Quotes;

use PHPUnit\Framework\TestCase;

use Quotes\QuoteGenerator;
use Quotes\Source\Kanye;
use Quotes\Source\Trump;
use Quotes\Strategy\Last;
use Quotes\Strategy\Random;

class QuoteGeneratorTest extends TestCase
{
    public function testDifferentQuoteSources()
    {
        $g = new QuoteGenerator(new Trump(), new Random());
        $this->assertNotEmpty((string)$g->retrieve());
        $g->setSource(new Kanye());
        $this->assertNotEmpty((string)$g->retrieve());
    }

    public function testLastQuoteStrategy()
    {
        $g = new QuoteGenerator(new Trump(), new Last());
        $lastQuote1 = $g->retrieve();
        $lastQuote2 = $g->retrieve();
        $this->assertEquals($lastQuote1, $lastQuote2);
    }

    public function testDifferentStrategies()
    {
        $g = new QuoteGenerator(new Trump(), new Random());
        $g->setStrategy(new Last());
        $q1 = $g->retrieve();
        $q2 = $g->retrieve();
        $this->assertEquals($q1, $q2);
    }
}
