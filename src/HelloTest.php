<?php
use PHPUnit\Framework\TestCase;
class HelloTest extends TestCase {
    public function testSay() {
        $h = new Hello();
        $this->assertEquals("hello", $h->say());
    }
}
