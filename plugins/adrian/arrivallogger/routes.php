<?php

use Adrian\Arrivallogger\Models\Arrivallogger;

Route::get('students-arrival', function () {

    return Arrivallogger::all();

});



Route::post('add-arrival', function () {

    Arrivallogger::create(post());

    return 'Arrival added';

});


Route::get('orm1/{name}', function ($name) {

    $log = Arrivallogger::where('name', 'LIKE', $name)->get();
    return $log;

});

Route::get('orm2/{name}/{late}', function ($name, $late) {

    $log = Arrivallogger::where('name', 'LIKE', $name)
        ->orWhere('late', 'LIKE', $late)
        ->get();
    return $log;

});


Route::get('orm3', function () {

    $log = Arrivallogger::orderBy('created_at', 'desc')->get();
    return $log;

});

