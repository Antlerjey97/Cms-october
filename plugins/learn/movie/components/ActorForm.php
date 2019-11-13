<?php namespace Learn\Movie\Components;

use Cms\Classes\ComponentBase;
use Learn\Movie\Models\Actor;

use Input;
//use Mail;
use October\Rain\Support\Facades\Flash;
use Validator;
use Redirect;

class ActorForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ActorForm Component',
            'description' => 'No description provided yet...'
        ];
    }
    public function onSave(){
    $actor = new actor();
    $actor->name=Input::get('name');
    $actor->lastname=Input::get('lastname');

    $actor->actorimage=Input::file('actorimage');

    $validate =validator::make(
        ['name'=>Input::get('name'),
          'lastname'=>Input::get('lastname')
            ],
        ['name'=>'required|min:3',
            'lastname'=>'required|min:3']

    );

    if($validate->fails()){
        return redirect::back()->withErrors($validate);
    }
else{
        $actor->save();
        Flash::success('Actor Added');
        return redirect::back();
}

    }
    public function defineProperties()
    {
        return [];
    }
}
