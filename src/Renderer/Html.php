<?php

declare(strict_types=1);

namespace Quotes\Renderer;

class Html extends TextBased
{
    public function pre() : string
    {
        return '<blockquote><p>';
    }

    public function between() : string
    {
        return ' -- ';
    }

    public function post() : string
    {
        return '</blockquote></p>';
    }
}
