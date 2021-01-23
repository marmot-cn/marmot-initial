<?php
namespace {@nameCaps}\Translator;

use PHPUnit\Framework\TestCase;

use {@nameCaps}\Utils\{@nameCaps}Utils;
use {@nameCaps}\Utils\MockFactory;

class {@nameCaps}DbTranslatorTest extends TestCase
{
    use {@nameCaps}Utils;

    private $translator;

    public function setUp()
    {
        $this->translator = new {@nameCaps}DbTranslator();
    }

    public function tearDown()
    {
        unset($this->translator);
    }

    public function testImplementsITranslator()
    {
        $this->assertInstanceOf(
            'Marmot\Interfaces\ITranslator',
            $this->translator
        );
    }

    public function testArrayToObjectIncorrectArray()
    {
        $result = $this->translator->arrayToObject(array());
        $this->assertInstanceOf('{@nameCaps}\Model\Null{@nameCaps}', $result);
    }

    public function testObjectToArrayIncorrectObject()
    {
        $result = $this->translator->objectToArray(null);
        $this->assertEquals([], $result);
    }

    public function testArrayToObject()
    {
        ${@name} = MockFactory::generate{@nameCaps}(1);

        $expression['{@name}_id'] = ${@name}->getId();

        $expression['status'] = ${@name}->getStatus();
        $expression['status_time'] = ${@name}->getStatusTime();
        $expression['create_time'] = ${@name}->getCreateTime();
        $expression['update_time'] = ${@name}->getUpdateTime();

        ${@name} = $this->translator->arrayToObject($expression);
        $this->assertInstanceof('{@nameCaps}\Model\{@nameCaps}', ${@name});
        $this->compareArrayAndObject($expression, ${@name});
    }

    public function testObjectToArray()
    {
        ${@name} = MockFactory::generate{@nameCaps}(1);

        $expression = $this->translator->objectToArray(${@name});

        $this->compareArrayAndObject($expression, ${@name});
    }
}
