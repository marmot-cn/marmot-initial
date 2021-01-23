<?php
namespace {@nameCaps}\Model;

use {@nameCaps}\Adapter\{@nameCaps}\I{@nameCaps}Adapter;

class Mock{@nameCaps} extends {@nameCaps}
{
    public function getRepository() : I{@nameCaps}Adapter
    {
        return parent::getRepository();
    }
}
