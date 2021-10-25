<?php namespace Contentim\FormSender;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'FormSender Demo',
            'description' => 'Lorem ipsum dolor it.',
            'author'      => 'Ivan Goncharenko',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            '\Contentim\FormSender\Components\Form' => 'FormSender'
        ];
    }

    public function registerSettings()
    {
    }
}
