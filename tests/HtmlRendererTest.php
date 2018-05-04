<?php

namespace Test\Trump;

use PHPUnit\Framework\TestCase;

use Trump\Author;
use Trump\HtmlQuoteRenderer;
use Trump\Message;
use Trump\Quote;


class HtmlRendererTest extends TestCase
{
    public function testOutput()
    {
        $renderer = new HtmlQuoteRenderer(
            new Quote(
                new Message('TEST'),
                new Author('Per')
            )
        );
        $this->assertContains('<h1>TEST -- Per</h1>', (string) $renderer);
    }
}
