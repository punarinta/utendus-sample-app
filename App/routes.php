<?php

Route::set('home', '/', 0, 'SampleApp\Index');
Route::set('dispatch', '/samples/html/{name}/{not_name}', 0, 'SampleApp\SampleOutputs', 'html');
Route::set('json-1', '/samples/json', 0, 'SampleApp\SampleOutputs', 'json');
Route::set('error-401', '/error/401', 1337, 'SampleApp\Index', 'error401');
Route::set('error-500', '/error/500', 0, 'SampleApp\Index', 'error500');
