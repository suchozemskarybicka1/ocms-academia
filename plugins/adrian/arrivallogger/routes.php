<?php

use Adrian\Arrivallogger\Models\Arrivallogger;

Route::get('students-arrival', function () {

    return Arrivallogger::get();

});



Route::get('add-arrival', function () {

    Arrivallogger::create([
        'name' => 'Stefan',
        'late' => true
    ]);

    return 'Arrival added';

});