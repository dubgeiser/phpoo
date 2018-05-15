<?php

declare(strict_types=1);

namespace Test\Quotes\Renderer;

use PHPUnit\Framework\TestCase;
use Quotes\Author;
use Quotes\Quote;
use Quotes\Renderer\TextBased;
use Test\Quotes\Renderer\TestTextRenderer;

class TextBasedTest extends TestCase
{
    /** @var Quote */
    private $quote;

    public function setUp()
    {
        $this->quote = new Quote('TEST', new Author('Test Author'));
    }

    public function testBasicRenderer()
    {
        $r = new TextBased();
        $this->assertEquals("TEST -- Test Author\n", $r->render($this->quote));
    }

    public function testExtendedRenderer()
    {
        $r = new TestTextRenderer();
        $this->assertEquals("START\nTEST\nTest Author\nEND\n", $r->render($this->quote));
    }
}
