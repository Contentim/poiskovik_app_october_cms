<?php namespace Contentim\FormSender\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

use Mail;
use Url;
use Input;
use Request;
use Response;
use Validator;
use ValidationException;

class Form extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'FormSender Demka',
            'description' => 'Its contact form sender to email'
        ];
    }

    public function defineProperties()
    {
        return [
            'max' => [
                'description'       => 'The most amount of todo items allowed',
                'title'             => 'Max items',
                'default'           => 10,
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Max Items value is required and should be integer.'
            ]
        ];
    }

    public function onSend()
    {
        $data = [
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'subject' => Input::get('subject'),
            'msg' => post('msg'),
        ];

        Mail::send('contentim.form::mail.test', $data, function ($message) {

            $message->to('contentim@yandex.ru', 'Admin Person')
                ->subject('Новое сообщение с сайта')
                ->replyTo('mail@klimbatika.ru', 'Site Name');
            $message->from('mail@klimbatika.ru', 'Site Name');

        });
    }
}
