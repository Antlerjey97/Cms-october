<?php namespace Learn\Category\Components;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [


            'Learn\Category\Components\ListCategory'=>'listcategory'
        ];
    }

    public function registerSettings()
    {
    }
}
