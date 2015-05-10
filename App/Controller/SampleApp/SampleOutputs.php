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
        // compile with 'debug' option to access time and memory data

        \View::json(
        [
            'username'  => 'world',
            'time'      => number_format((microtime(1) - $GLOBALS['t1']) * 1000, 2) . ' ms',
            'memory'    => number_format((memory_get_usage() - $GLOBALS['m1']) / 1024, 2) . ' kB',
        ]);
    }
}