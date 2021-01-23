<?php
namespace {@nameCaps}\CommandHandler\{@nameCaps};

use Marmot\Interfaces\ICommandHandler;
use Marmot\Interfaces\ICommand;

use {@nameCaps}\Command\{@nameCaps}\Edit{@nameCaps}Command;
use {@nameCaps}\Repository\{@nameCaps}Repository;
use {@nameCaps}\Adapter\{@nameCaps}\I{@nameCaps}Adapter;

class {@operateCaps}{@nameCaps}CommandHandler implements ICommandHandler
{
    private $repository;

    public function __construct()
    {
        $this->repository = new {@nameCaps}Repository();
    }

    public function __destruct()
    {
        unset($this->repository);
    }

    protected function get{@nameCaps}Repository() : I{@nameCaps}Adapter
    {
        return $this->repository;
    }

    public function execute(ICommand $command)
    {
        if (!($command instanceof Edit{@nameCaps}Command)) {
            throw new \InvalidArgumentException;
        }

        $repository = $this->get{@nameCaps}Repository();
        ${@name} = $repository->fetchOne($command->id);

        return ${@name}->{@operate}();
    }
}
