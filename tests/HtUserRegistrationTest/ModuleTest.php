<?php
namespace HtUserRegistrationTest;

use HtUserRegistration\Module;

class ModuleTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigIsArray()
    {
        $module = new Module();
        $this->assertInternalType('array', $module->getConfig());
        $this->assertInternalType('array', $module->getServiceConfig());
        $this->assertInternalType('array', $module->getAutoloaderConfig());
    }    
}
