<?php
namespace {@nameCaps}\Controller;

use {@nameCaps}\Adapter\{@nameCaps}\I{@nameCaps}Adapter;
use Marmot\Interfaces\IView;

class Mock{@nameCaps}FetchController extends {@nameCaps}FetchController
{
    public function getRepository() : I{@nameCaps}Adapter
    {
        return parent::getRepository();
    }

    public function generateView($data) : IView
    {
        return parent::generateView($data);
    }

    public function getResourceName() : string
    {
        return parent::getResourceName();
    }
}
