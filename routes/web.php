<?php

Route::get('/', 'EventsController@index')->name('home');

Route::resource('events', 'EventsController');
