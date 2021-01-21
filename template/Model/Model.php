<?php
namespace {@name}\Model;

use Marmot\Core;
use Marmot\Common\Model\Object;
use Marmot\Common\Model\IObject;

use {@name}\Adapter\{@name}\I{@name}Adapter;
use {@name}\Repository\{@name}Repository;

class {@name} implements IObjec
{
	use Object

	public function __construct(int $id = 0)
    {
        $this->id = $id;
        $this->status = 0;
        $this->statusTime = 0;
        $this->createTime = Core::$container->get('time');
        $this->updateTime = Core::$container->get('time');
        $this->repository = new {@name}Repository();
    }

    public function __destruct()
    {
        unset($this->id);
        unset($this->status);
        unset($this->statusTime);
        unset($this->createTime);
        unset($this->updateTime);
        unset($this->repository);
    }

    public function setStatus(int $status) : void
    {
        
    }

    protected function getRepository() : I{@name}Adapter
    {
        return $this->repository;
    }

}