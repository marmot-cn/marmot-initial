<?php
namespace {@nameCaps}\Adapter\{@nameCaps};

use PHPUnit\Framework\TestCase;
use Prophecy\Argument;

use Marmot\Core;

use {@nameCaps}\Model\{@nameCaps};
use {@nameCaps}\Model\Null{@nameCaps};
use {@nameCaps}\Translator\{@nameCaps}DbTranslator;
use {@nameCaps}\Adapter\{@nameCaps}\Query\{@nameCaps}RowCacheQuery;

/**
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @author chloroplast
 */
class {@nameCaps}DbAdapterTest extends TestCase
{
    private $adapter;

    public function setUp()
    {
        $this->adapter = $this->getMockBuilder({@nameCaps}DbAdapter::class)
                           ->setMethods(
                               [
                                'addAction',
                                'editAction',
                                'fetchOneAction',
                                'fetchListAction',
                                'fetchUserGroup'
                                ]
                           )
                           ->getMock();
    }

    public function tearDown()
    {
        unset($this->adapter);
    }

    /**
     * 测试是否 实现 I{@nameCaps}Adapter
     */
    public function testImplementsI{@nameCaps}Adapter()
    {
        $this->assertInstanceOf(
            '{@nameCaps}\Adapter\{@nameCaps}\I{@nameCaps}Adapter',
            $this->adapter
        );
    }

    /**
     * 测试是否初始化 {@nameCaps}DbTranslator
     */
    public function testGetDbTranslator()
    {
        $adapter = new Mock{@nameCaps}DbAdapter();
        $this->assertInstanceOf(
            '{@nameCaps}\Translator\{@nameCaps}DbTranslator',
            $adapter->getDbTranslator()
        );
    }

    /**
     * 测试是否初始化 {@nameCaps}RowCacheQuery
     */
    public function testGetRowCacheQuery()
    {
        $adapter = new Mock{@nameCaps}DbAdapter();
        $this->assertInstanceOf(
            '{@nameCaps}\Adapter\{@nameCaps}\Query\{@nameCaps}RowCacheQuery',
            $adapter->getRowQuery()
        );
    }

    public function testGetNullObject()
    {
        $adapter = new Mock{@nameCaps}DbAdapter();
        $this->assertInstanceOf(
            'Marmot\Interfaces\INull',
            $adapter->getNullObject()
        );
    }

    //add
    public function testInsert()
    {
        //初始化
        $expected{@nameCaps} = new {@nameCaps}();

        //绑定
        $this->adapter->expects($this->exactly(1))
                         ->method('addAction')
                         ->with($expected{@nameCaps})
                         ->willReturn(true);

        //验证
        $result = $this->adapter->add($expected{@nameCaps});
        $this->assertTrue($result);
    }

    //edit
    public function testUpdate()
    {
        //初始化
        $expected{@nameCaps} = new {@nameCaps}();
        $keys = ['keys'];

        //绑定
        $this->adapter->expects($this->exactly(1))
                         ->method('editAction')
                         ->with($expected{@nameCaps}, $keys)
                         ->willReturn(true);

        //验证
        $result = $this->adapter->edit($expected{@nameCaps}, $keys);
        $this->assertTrue($result);
    }

    //fetchOne
    public function testFetchOne()
    {
        //初始化
        $expected{@nameCaps} = new {@nameCaps}();
        $id = 1;

        //绑定
        $this->adapter->expects($this->exactly(1))
                         ->method('fetchOneAction')
                         ->with($id)
                         ->willReturn($expected{@nameCaps});

        //验证
        ${@name} = $this->adapter->fetchOne($id);
        $this->assertEquals($expected{@nameCaps}, ${@name});
    }

    //fetchList
    public function testFetchList()
    {
        //初始化
        ${@name}One = new {@nameCaps}(1);
        ${@name}Two = new {@nameCaps}(2);

        $ids = [1, 2];

        $expected{@nameCaps}List = [];
        $expected{@nameCaps}List[${@name}One->getId()] = ${@name}One;
        $expected{@nameCaps}List[${@name}Two->getId()] = ${@name}Two;

        //绑定
        $this->adapter->expects($this->exactly(1))
                         ->method('fetchListAction')
                         ->with($ids)
                         ->willReturn($expected{@nameCaps}List);

        //验证
        ${@name}List = $this->adapter->fetchList($ids);
        $this->assertEquals($expected{@nameCaps}List, ${@name}List);
    }

    public function testFormatFilter()
    {
        $adapter = new Mock{@nameCaps}DbAdapter();

        $expectedCondition = ' 1 ';
        $condition = $adapter->formatFilter([]);
        $this->assertEquals($expectedCondition, $condition);
    }

    public function testFormatSort()
    {
        $adapter = new Mock{@nameCaps}DbAdapter();

        $expectedCondition = '';
        $condition = $adapter->formatSort([]);
        $this->assertEquals($expectedCondition, $condition);
    }
}