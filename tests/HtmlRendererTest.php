<?php

namespace Test\Quotes;

use PHPUnit\Framework\TestCase;

use Quotes\Author;
use Quotes\HtmlQuoteRenderer;
use Quotes\Message;
use Quotes\AttributableQuote;


class HtmlRendererTest extends TestCase
{
    public function testOutput()
    {
        $renderer = new HtmlQuoteRenderer(
            new AttributableQuote(
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
