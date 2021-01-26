<?php
namespace {@namespaceCaps}\View;

use Neomerx\JsonApi\Schema\SchemaProvider;

/**
 * @codeCoverageIgnore
 */
class {@nameCaps}Schema extends SchemaProvider
{
    protected $resourceType = '';

    public function getId(${@name}) : int
    {
        return ${@name}->getId();
    }

    public function getAttributes(${@name}) : array
    {
        return [
            'status' => ${@name}->getStatus(),
            'createTime' => ${@name}->getCreateTime(),
            'updateTime' => ${@name}->getUpdateTime(),
            'statusTime' => ${@name}->getStatusTime(),
        ];
    }

    public function getRelationships(${@name}, $isPrimary, array $includeList)
    {
        unset($isPrimary);
        unset($includeList);
        
        return [
        ];
    }
}
