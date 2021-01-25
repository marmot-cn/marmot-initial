<?php
namespace {@namespaceCaps}\Translator;

use Marmot\Interfaces\ITranslator;

use UserGroup\Model\UserGroup;

use {@namespaceCaps}\Model\{@nameCaps};
use {@namespaceCaps}\Model\Null{@nameCaps};

class {@nameCaps}DbTranslator implements ITranslator
{
    public function arrayToObject(array $expression, ${@name} = null) : {@nameCaps}
    {
        if (!isset($expression['{@nameUnderScore}_id'])) {
            return Null{@nameCaps}::getInstance();
        }

        if (${@name} == null) {
            ${@name} = new {@nameCaps}($expression['{@nameUnderScore}_id']);
        }

        ${@name}->setStatus($expression['status']);
        ${@name}->setCreateTime($expression['create_time']);
        ${@name}->setUpdateTime($expression['update_time']);
        ${@name}->setStatusTime($expression['status_time']);

        return ${@name};
    }

    /**
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function objectToArray(${@name}, array $keys = array()) : array
    {
        if (!${@name} instanceof {@nameCaps}) {
            return [];
        }

        if (empty($keys)) {
            $keys = array(
                'id',
                'status',
                'createTime',
                'updateTime',
                'statusTime'
            );
        }

        $expression = array();

        if (in_array('id', $keys)) {
            $expression['{@nameUnderScore}_id'] = ${@name}->getId();
        }

        if (in_array('status', $keys)) {
            $expression['status'] = ${@name}->getStatus();
        }
        if (in_array('createTime', $keys)) {
            $expression['create_time'] = ${@name}->getCreateTime();
        }
        if (in_array('updateTime', $keys)) {
            $expression['update_time'] = ${@name}->getUpdateTime();
        }
        if (in_array('statusTime', $keys)) {
            $expression['status_time'] = ${@name}->getStatusTime();
        }
        
        return $expression;
    }
}