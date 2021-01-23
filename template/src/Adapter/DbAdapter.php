<?php
namespace {@nameCaps}\Adapter\{@nameCaps};

use Marmot\Interfaces\INull;

use Marmot\Framework\Common\Adapter\DbAdapterTrait;

use {@nameCaps}\Model\{@nameCaps};
use {@nameCaps}\Model\Null{@nameCaps};
use {@nameCaps}\Translator\{@nameCaps}DBTranslator;
use {@nameCaps}\Adapter\{@nameCaps}\Query\{@nameCaps}RowCacheQuery;

class {@nameCaps}DBAdapter implements I{@nameCaps}Adapter
{
	use DbAdapterTrait;

    private $dbTranslator;

    private $rowCacheQuery;

    public function __construct()
    {
        $this->dbTranslator = new {@nameCaps}DbTranslator();
        $this->rowCacheQuery = new {@nameCaps}RowCacheQuery();
    }

    public function __destruct()
    {
        unset($this->dbTranslator);
        unset($this->rowCacheQuery);
    }
    
    protected function getDbTranslator() : {@nameCaps}DbTranslator
    {
        return $this->dbTranslator;
    }

    protected function getRowQuery() : {@nameCaps}RowCacheQuery
    {
        return $this->rowCacheQuery;
    }

    protected function getNullObject() : INull
    {
        return Null{@nameCaps}::getInstance();
    }

    public function add({@nameCaps} ${@name}) : bool
    {
        return $this->addAction(${@name});
    }

    public function edit({@nameCaps} ${@name}, array $keys = array()) : bool
    {
        return $this->editAction(${@name}, $keys);
    }

    public function fetchOne($id) : {@nameCaps}
    {
        return $this->fetchOneAction($id);
    }

    public function fetchList(array $ids) : array
    {
        return $this->fetchListAction($ids);
    }

    protected function formatFilter(array $filter) : string
    {
        $condition = $conjection = '';

        return empty($condition) ? ' 1 ' : $condition ;
    }

    protected function formatSort(array $sort) : string
    {
        $condition = '';
        $conjection = ' ORDER BY ';

        return $condition;
    }
}