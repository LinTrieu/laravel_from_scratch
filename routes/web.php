<?php

Route::get('/', function () {
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to work'
    ];

    return view('welcome', [
        'tasks' => $tasks,
        'foo' => 'foobar'
    ]);
});

Route::get('/about', function() {
    return view('about');
});


Route::get('/contact', function() {
    return view('contact');
});
