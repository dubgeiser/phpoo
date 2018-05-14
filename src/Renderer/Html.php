<?php

declare(strict_types=1);

namespace Quotes\Renderer;

use Quotes\Attributable;

class Html
{
    public function render(Attributable $quote) : string
    {
        return '<blockquote><p>'
            . $quote->getText()
            . ' -- '
            . (string) $quote->getAuthor()
            . '</blockquote></p>'
            . "\n";
    }
}
