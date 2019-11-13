<?php namespace Learn\Movie\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;
use Learn\Movie\Models\Actor;

class ActorBox extends FormWidgetBase
{
    public function widgetDetails()
    {
        return [
            'name' => 'Actorbox',
            'description' => 'Field for adding actors'
        ];
    }

    public function render(){
        $this->prepareVars();
        $this->vars['actors'];
//        dump($this->vars['selectedValues']);
        return $this->makePartial('widget');
    }

    public function loadAssets()
    {
        $this->addCss('css/select2.css');
        $this->addJs('js/select2.js');
    }
    public function prepareVars(){
        $this->vars['id']=$this->model->id;
        $this->vars['actors']=Actor::all()->lists('full_name','id');
        $this->vars['name']=$this->formField->getName().'[]';

        if(!empty($this->getLoadValue()))
        $this->vars['selectedValues']=$this->getLoadValue();
        else
            $this->vars['selectedValues']=[];
    }
    public function getSaveValue($actors)
    {
        $newArray=[];

    foreach ($actors as $actorId){

        if(!is_numeric($actorId)){
            $newActor= new Actor;
            $lastname=explode(' ',$actorId);

            $newActor -> name =$lastname[0];
            $newActor->lastname=$lastname[1];
            $newActor->save();
            $newArray[]=$newActor->id;
        }
        else{
            $newArray[]=$actorId;
        }
    }
        return $newArray;
   }
}
