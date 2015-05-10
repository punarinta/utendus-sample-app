<?php

namespace App\Controller\SampleApp;

class Index
{
    static function index()
    {
        \View::html('sample-app/index');
    }

    static function error500()
    {
        throw new \Exception('Sample exception', 42);
    }

    static function error401()
    {
        // To get an error compile with 'auth' option.
    }
}