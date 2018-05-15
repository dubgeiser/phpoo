<?php

declare(strict_types=1);

namespace Test\Quotes\Renderer;

use Quotes\Renderer\TextBased;

class TestTextRenderer extends TextBased
{
    public function pre() : string
    {
        return "START\n";
    }

    public function between() : string
    {
        return "\n";
    }

    public function post() : string
    {
        return "\nEND\n";
    }
}
