<?php
namespace {@namespaceCaps}\Controller;

use Marmot\Framework\Classes\Controller;

use Marmot\Framework\Classes\CommandBus;

use Common\WidgetRule\CommonWidgetRule;

use {@namespaceCaps}\WidgetRule\{@nameCaps}WidgetRule;
use {@namespaceCaps}\Repository\{@nameCaps}Repository;

class Mock{@nameCaps}ControllerTrait extends Controller
{
    use {@nameCaps}ControllerTrait;

    public function __construct()
    {
        parent::__construct();
    }

    public function __destruct()
    {
        parent::__destruct();
    }

    public function get{@nameCaps}WidgetRulePublic() : {@nameCaps}WidgetRule
    {
        return $this->get{@nameCaps}WidgetRule();
    }

    public function getCommonWidgetRulePublic() : CommonWidgetRule
    {
        return $this->getCommonWidgetRule();
    }

    public function getRepositoryPublic() : {@nameCaps}Repository
    {
        return $this->getRepository();
    }

    public function getCommandBusPublic() : CommandBus
    {
        return $this->getCommandBus();
    }
}
