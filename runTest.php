<?php

class runTest extends PHPUnit_Framework_TestCase
{
    public function testRunTest()
    {
        $coverageFile = ($coverageOption = array_keys($_SERVER['argv'], '--coverage-clover'))
            ? $_SERVER['argv'][++$coverageOption[0]]
            : '';
        
        require_once __DIR__.'/test.php';
    }
}
