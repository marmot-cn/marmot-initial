<?php
namespace {@namespaceCaps}\Controller;

use PHPUnit\Framework\TestCase;
use Prophecy\Argument;

class {@nameCaps}ControllerTraitTest extends TestCase
{
    private $trait;

    public function setUp()
    {
        $this->trait = new Mock{@nameCaps}ControllerTrait();
    }

    public function tearDown()
    {
        unset($this->trait);
    }

    public function testGet{@nameCaps}WidgetRule()
    {
        $this->assertInstanceOf(
            '{@namespaceCaps}\WidgetRule\{@nameCaps}WidgetRule',
            $this->trait->get{@nameCaps}WidgetRulePublic()
        );
    }

    public function testGetCommonWidgetRule()
    {
        $this->assertInstanceOf(
            'Common\WidgetRule\CommonWidgetRule',
            $this->trait->getCommonWidgetRulePublic()
        );
    }

    public function testGetRepository()
    {
        $this->assertInstanceOf(
            '{@namespaceCaps}\Repository\{@nameCaps}Repository',
            $this->trait->getRepositoryPublic()
        );
    }

    public function testGetCommandBus()
    {
        $this->assertInstanceOf(
            'Marmot\Framework\Classes\CommandBus',
            $this->trait->getCommandBusPublic()
        );
    }
}
