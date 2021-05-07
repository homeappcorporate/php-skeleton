<?php

namespace Test\Unit;

use Homeapp\LibraryOrProjectName\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testVerifyClassIsWorkingAsExpected():void
    {
        $class = new Example();
        self::assertSame('ok', $class->test());
    }
}
