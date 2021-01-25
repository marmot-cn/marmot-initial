<?php
namespace {@namespaceCaps}\Adapter\{@nameCaps};

use PHPUnit\Framework\TestCase;
use Prophecy\Argument;

use Marmot\Core;

use {@namespaceCaps}\Model\{@nameCaps};

/**
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @author chloroplast
 */
class {@nameCaps}MockAdapterTest extends TestCase
{
    private $adapter;

    public function setUp()
    {
        $this->adapter = new {@nameCaps}MockAdapter();
    }

    public function tearDown()
    {
        unset($this->adapter);
    }

    public function testInsert()
    {
        $this->assertTrue($this->adapter->add(new {@nameCaps}()));
    }

    public function testUpdate()
    {
        $this->assertTrue($this->adapter->edit(new {@nameCaps}(), ['keys']));
    }

    public function testFetchOne()
    {
        $this->assertInstanceOf(
            '{@namespaceCaps}\Model\{@nameCaps}',
            $this->adapter->fetchOne(1)
        );
    }

    public function testFetchList()
    {
        $list = $this->adapter->fetchList([1, 2, 3]);

        foreach ($list as $each) {
            $this->assertInstanceOf(
                '{@namespaceCaps}\Model\{@nameCaps}',
                $each
            );
        }
    }

    public function testFilter()
    {
        list($list, $count) = $this->adapter->filter(['filter'], ['sort']);

        foreach ($list as $each) {
            $this->assertInstanceOf(
                '{@namespaceCaps}\Model\{@nameCaps}',
                $each
            );
        }

        $this->assertEquals(sizeof($list), $count);
    }
}
