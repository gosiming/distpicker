<?php

namespace GoSiming\DcatDistpicker\Grid;

use Dcat\Admin\Grid\Displayers\AbstractDisplayer;
use GoSiming\DcatDistpicker\DcatDistpickerHelper;

class Distpicker extends AbstractDisplayer
{
    public function display()
    {
        return DcatDistpickerHelper::getAreaName($this->value);
    }
}
