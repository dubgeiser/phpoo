<?php

namespace Quotes;

interface QuoteStrategy
{
    public function setAuthor(Author $author);
    public function retrieve($quotes) : Quote;
}
