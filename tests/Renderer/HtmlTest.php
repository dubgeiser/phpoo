<?php

namespace Test\Quotes\Renderer;

use PHPUnit\Framework\TestCase;

use Quotes\Author;
use Quotes\Renderer\Html;
use Quotes\Quote;


class HtmlTest extends TestCase
{
    public function testOutput()
    {
        $renderer = new Html();
        $quote1 = new Quote('TEST1', new Author('Testermans 1'));
        $quote2 = new Quote('TEST2', new Author('Testermans 2'));
        $this->assertContains(
            '<blockquote><p>TEST1 -- Testermans 1</blockquote></p>',
            (string) $renderer->render($quote1)
        );
        $this->assertContains(
            '<blockquote><p>TEST2 -- Testermans 2</blockquote></p>',
            (string) $renderer->render($quote2)
        );
    }
}
