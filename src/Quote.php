<?php

declare(strict_types=1);

namespace Quotes;

interface Quote extends Renderable
{
    public function getMessage() : Message;
    public function getAuthor() : Author;
}
