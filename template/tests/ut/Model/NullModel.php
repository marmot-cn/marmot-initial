<?php
namespace {@nameCaps}\Model;

use PHPUnit\Framework\TestCase;

class Null{@nameCaps}Test extends TestCase
{
    private $department;

    public function setUp()
    {
        $this->department = Null{@nameCaps}::getInstance();
    }

    public function tearDown()
    {
        unset($this->department);
    }

    public function testExtendsNews()
    {
        $this->assertInstanceof('{@nameCaps}\Model\{@nameCaps}', $this->department);
    }

    public function testImplementsNull()
    {
        $this->assertInstanceof('Marmot\Interfaces\INull', $this->department);
    }
}
