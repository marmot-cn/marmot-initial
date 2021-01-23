<?php
namespace {@nameCaps}\Controller;

use Marmot\Framework\Classes\CommandBus;

use Common\WidgetRule\CommonWidgetRule;

use {@nameCaps}\WidgetRule\{@nameCaps}WidgetRule;
use {@nameCaps}\Repository\{@nameCaps}Repository;
use {@nameCaps}\CommandHandler\{@nameCaps}\{@nameCaps}CommandHandlerFactory;

trait {@nameCaps}ControllerTrait
{
    protected function get{@nameCaps}WidgetRule() : {@nameCaps}WidgetRule
    {
        return new {@nameCaps}WidgetRule();
    }

    protected function getCommonWidgetRule() : CommonWidgetRule
    {
        return new CommonWidgetRule();
    }

    protected function getRepository() : {@nameCaps}Repository
    {
        return new {@nameCaps}Repository();
    }

    protected function getCommandBus() : CommandBus
    {
        return new CommandBus(new {@nameCaps}CommandHandlerFactory());
    }
}
