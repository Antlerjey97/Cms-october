<?php namespace Learn\Movie\Components;
use Cms\Classes\ComponentBase;
use Learn\Movie\Models\Actor;

class Actors extends ComponentBase
{
    public $actors;
            public function componentDetails()
{
    // TODO: Implement componentDetails() method.

    return [
        'name'=>'Actor List',
        'description'=>'List of actors'
        ];
}
    public  function onRun()
{
            $this->actors=$this->loadActors()->take($this->property("display"));
//            dump($this->property('display'));


}

    protected  function loadActors(){
                $sort =$this->property('sort');
                $sort =explode(" ",$sort);

                return Actor::orderBy($sort[0],$sort[1])->get() ;
            }
    public function defineProperties()
    {
        return [
            'display'=>[
                'title'=>'Số hiển thị '
            ],
            'sort'=>[
                'title'=>'Group By',
                'type'=>'dropdown',
                'options'=>[
                    'name asc'=>'Name Asc',
                    'name desc'=>'Name Desc',
                    'id asc' =>'ID Asc',
                    'id desc'=>'ID Desc'
                ]
            ]
        ];
    }

    public function getProperties()
    {
        return ['a','b'];
    }





}