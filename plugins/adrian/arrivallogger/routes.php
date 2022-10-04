<?php

use Adrian\Arrivallogger\Models\Arrivallogger;

Route::get('students-arrival', function () {

    return Arrivallogger::all();

});



Route::get('add-arrival', function () {

    Arrivallogger::create(input());

    return 'Arrival added';

});