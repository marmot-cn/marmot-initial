<?php
namespace {@nameCaps}\Adapter\{@nameCaps};

use Marmot\Core;

use {@nameCaps}\Model\{@nameCaps};
use {@nameCaps}\Utils\MockFactory;

class {@nameCaps}MockAdapter implements I{@nameCaps}Adapter
{
    public function fetchOne($id) : {@nameCaps}
    {
        return MockFactory::generate{@nameCaps}($id);
    }

    public function fetchList(array $ids) : array
    {
        $ids = [1, 2, 3, 4];

        ${@name}List = array();

        foreach ($ids as $id) {
            ${@name}List[$id] = MockFactory::generate{@nameCaps}($id);
        }

        return ${@name}List;
    }

    public function filter(
        array $filter = array(),
        array $sort = array(),
        int $offset = 0,
        int $size = 20
    ) : array {

        unset($filter);
        unset($sort);
        unset($offset);
        unset($size);

        $ids = [1, 2, 3, 4];
        $count = 4;

        return array($this->fetchList($ids), $count);
    }

    public function add({@nameCaps} ${@name}) : bool
    {
        unset(${@name});
        return true;
    }

    public function edit({@nameCaps} ${@name}, array $keys = array()) : bool
    {
        unset(${@name});
        unset($keys);
        return true;
    }
}
