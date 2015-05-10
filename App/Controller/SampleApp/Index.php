<?php

namespace App\Controller\SampleApp;

class Index
{
    static function index()
    {
        \View::html('sample-app/index');
    }
}