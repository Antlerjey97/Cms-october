<?php namespace Learn\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Flash;
use ValidationException;

class ContactForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Contact Form',
            'description' => 'Simple contact form'
        ];
    }


   public function onsend(){
        $data=post();
        $rules= [
           'name'=>'required| min:5',
            'email'=>'required|email'
            ];

        $validator=validator::make($data,$rules);


       if ($validator->fails()) {
//         return Redirect::back()->withErrors($validator);
           throw new ValidationException($validator);
//            return [
//                '#result'=> $this->renderPartial('contactform::messages',
//                        [
//                'errors'=>$validator->messages()->all(),
//                'field'=>$validator->messages()
//
//           ])];

       }

       else {   Flash::success('Jobs done!');
        $vars=['name'=>Input::get('name'),'email'=>Input::get('email'),'content'=>Input::get('content')];

        Mail::send('learn.contact::mail.message', $vars, function($message) {

            $message->to('antlerjely97@gmail.com', 'Admin Person');
            $message->subject('Đây là tin nhắn trả lời tự động !');

        });
   }}

}