<?php

Route::set('home', '/', 0, 'SampleApp\Index');
Route::set('sample-1', '/samples/html/{name}/{not_name}', 0, 'SampleApp\SampleOutputs', 'html');
Route::set('sample-2', '/samples/json', 0, 'SampleApp\SampleOutputs', 'json');
