<?php

use Adrian\Arrivallogger\Models\Arrivallogger;

Route::get('students-arrival', function () {

    return Arrivallogger::all();

});



Route::post('add-arrival', function () {

    Arrivallogger::create(post());

    return 'Arrival added';

});


Route::get('orm1', function () {

    $log = Arrivallogger::where('name', 'LIKE', 'Jozo')->get();
    return $log;

});

Route::get('orm2', function () {

    $log = Arrivallogger::where('name', 'LIKE', 'Jozo')
        ->orWhere('late', 'LIKE', 1)
        ->get();
    return $log;

});


Route::get('orm3', function () {

    $log = Arrivallogger::orderBy('created_at', 'desc')->get();
    return $log;

});
