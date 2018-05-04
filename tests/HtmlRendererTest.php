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
        $this->assertContains(
            '<blockquote><p>TEST -- Per</blockquote></p>',
            (string) $renderer
        );
    }
}
