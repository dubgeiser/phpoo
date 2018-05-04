<?php

namespace Test\Quotes;

use PHPUnit\Framework\TestCase;
use Quotes\Author;


class AuthorTest extends TestCase
{
    public function testToString()
    {
        $a = new Author('Per');
        $this->assertEquals('Per', (string) $a);
    }
}
