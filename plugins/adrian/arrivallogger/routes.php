<?php

use Adrian\Arrivallogger\Models\Arrivallogger;

Route::get('students-arrival', function () {

    return Arrivallogger::all();

});



Route::post('add-arrival', function () {

    Arrivallogger::create(post());

    return 'Arrival added';

});
