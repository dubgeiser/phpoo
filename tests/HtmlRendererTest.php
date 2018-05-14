<?php

namespace Test\Quotes;

use PHPUnit\Framework\TestCase;

use Quotes\Author;
use Quotes\Renderer\Html;
use Quotes\Quote;


class HtmlRendererTest extends TestCase
{
    public function testOutput()
    {
        $renderer = new Html(
            new Quote(
                'TEST',
                new Author('Per')
            )
        );
        $this->assertContains(
            '<blockquote><p>TEST -- Per</blockquote></p>',
            (string) $renderer
        );
    }
}
