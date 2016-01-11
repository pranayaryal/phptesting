<?php








Route::group(['middleware' => ['web']], function () {


    Route::auth();

    Route::get('/', function () {
        $task = App\Task::latest()->get();

        return view('layouts.trying', compact($task));
    });


    Route::get('/login', function () {
        return view('auth.login');
    });

    Route::get('/register', function () {
        return view('auth.register');
    });

//

    Route::get('/home', function () {
        return view('home');
    });

});
