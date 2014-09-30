<?php

require_once "../src/Person.php";

class BlogTest extends \PHPUnit_Framework_TestCase
{
    public function testSay()
    {
        $person = new Person();
        $this->assertEquals('hello', $person->say());
    }
}
