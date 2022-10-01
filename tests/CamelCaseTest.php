<?php

use PHPUnit\Framework\TestCase;
use App\CamelCase;


class CamelCaseTest extends TestCase
{
    protected $camelCase;
    protected $testCamelStr;

    protected function setUp(): void
    {
        $this->camelCase = new CamelCase();
        $this->testCamelStr = 'saveChangesInTheEditor';
    }
    
    protected function tearDown(): void
    {
        $this->camelCase->count = 1;
    }
    
    public function testNumberOfWordsInCamelCaseString()
    {
        $expected = 5;
        $actual = $this->camelCase->numberOfWords($this->testCamelStr);

        $this->assertEquals($expected, $actual);
    }

}
