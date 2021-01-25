<?php
namespace {@namespaceCaps}\Utils;

trait {@nameCaps}Utils
{
    private function compareArrayAndObject(
        array $expectedArray,
        $dictionary
    ) {
        $this->assertEquals($expectedArray['{@name}_id'], $dictionary->getId());

        $this->assertEquals($expectedArray['status'], $dictionary->getStatus());
        $this->assertEquals($expectedArray['create_time'], $dictionary->getCreateTime());
        $this->assertEquals($expectedArray['update_time'], $dictionary->getUpdateTime());
        $this->assertEquals($expectedArray['status_time'], $dictionary->getStatusTime());
    }
}
