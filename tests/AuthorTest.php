<?php

namespace Test\Trump;

use PHPUnit\Framework\TestCase;
use Trump\Author;


class AuthorTest extends TestCase
{
    public function testToString()
    {
        $a = new Author('Per');
        $this->assertEquals('Per', (string) $a);
    }
}
