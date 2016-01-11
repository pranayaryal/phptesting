<?php








Route::group(['middleware' => ['web']], function () {


    Route::auth();

    Route::get('/', function () {


        $tasks = App\Task::latest()->get();


        return view('layouts.trying', compact('tasks'));
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

    Route::get('api/tasks', function ()
    {
        return App\Task::latest()->get();
    });

});
