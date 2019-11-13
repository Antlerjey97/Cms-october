<?php namespace Learn\Movie;


use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Learn\Movie\Components\Actors'=>'actors',
            'Learn\Movie\Components\ActorForm'=>'actorform',
            'Learn\Movie\Components\FilterMovies'=>'filtermovies',
           // 'Learn\Category\Components\ListCategory'=>'listcategory',

        ];
    }
    public function registerFormWidgets()
    {
        return [
            'Learn\Movie\Formwidgets\actorbox'=>[
                'label'=>'Actorbox field',
                'code'=>'actorbox'
            ]

        ];
    }

    public function registerSettings()
    {
    }
}

