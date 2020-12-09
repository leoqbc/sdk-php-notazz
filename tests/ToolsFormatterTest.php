<?php

use PHPUnit\Framework\TestCase;
use Multiverse\Notazz\DSL\Tools\Formatter;

class ToolsFormatterTest extends TestCase
{
    public function testMethodSnakeToCamelFormatTextSnakeToCamel()
    {
        $formatter = new Formatter();

        $this->assertEquals('textShouldBeCamelCased', $formatter->snakeToCamel('text_should_be_camel_cased'));
    }
}
