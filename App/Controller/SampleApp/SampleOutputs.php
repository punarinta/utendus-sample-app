<?php

namespace App\Controller\SampleApp;

class SampleOutputs
{
    static function html()
    {
        \View::html('sample-app/html', ['username' => \Input::route('name')]);
    }

    static function json()
    {
        \View::json(['username' => 'world']);
    }
}