<?php

namespace Quotes;

interface Quote extends Renderable
{
    public function getMessage();
    public function getAuthor();
}
