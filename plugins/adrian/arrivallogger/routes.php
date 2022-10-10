<?php

use Adrian\Arrivallogger\Models\Arrivallogger;

Route::get('students-arrival', function () {

    return Arrivallogger::all();

});



Route::post('add-arrival', function () {

    Arrivallogger::create(post());

    return 'Arrival added';

});


Route::get('orm', function () {

    $log = Arrivallogger::where('name', 'LIKE', 'Jozo')->get();
    return $log;

});
