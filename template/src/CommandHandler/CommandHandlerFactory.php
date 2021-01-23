<?php
namespace {@nameCaps}\CommandHandler\{@nameCaps};

use Marmot\Interfaces\ICommandHandlerFactory;
use Marmot\Interfaces\ICommandHandler;
use Marmot\Interfaces\ICommand;
use Marmot\Framework\Classes\NullCommandHandler;

class {@nameCaps}CommandHandlerFactory implements ICommandHandlerFactory
{
    const MAPS = array(
        '{@nameCaps}\Command\{@nameCaps}\Add{@nameCaps}Command' =>
        '{@nameCaps}\CommandHandler\{@nameCaps}\Add{@nameCaps}CommandHandler',
        '{@nameCaps}\Command\{@nameCaps}\Edit{@nameCaps}Command' =>
        '{@nameCaps}\CommandHandler\{@nameCaps}\Edit{@nameCaps}CommandHandler',
    );

    public function getHandler(ICommand $command) : ICommandHandler
    {
        $commandClass = get_class($command);
        $commandHandler = isset(self::MAPS[$commandClass]) ? self::MAPS[$commandClass] : '';

        return class_exists($commandHandler) ? new $commandHandler : NullCommandHandler::getInstance();
    }
}
