<?php

declare(strict_types=1);

namespace Quotes\Renderer;

use Quotes\Attributable;

/**
 * Base class for text-based renderers of Attributables.
 */
class TextBased
{
    public function render(Attributable $quote) : string
    {
        return $this->pre()
            . $quote->getText()
            . $this->between()
            . (string) $quote->getAuthor()
            . $this->post();
    }

    public function pre() : string
    {
        return '';
    }

    public function between() : string
    {
        return ' -- ';
    }

    public function post() : string
    {
        return "\n";
    }
}
