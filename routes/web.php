
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
//home page
Route::get('/', function () {
    return view('home');
});

//welcome page
Route::get('/welcome', function () {
	if(!session()->has('data'))
	{
		return redirect('/login');
	}
    return view('welcome');
});
//logout
Route::get('/logout', function () {
   //session()->forget("_KUL");
   session()->forget('data');
   return redirect('/');
});
//profile page
Route::get('/profile', function () {
	if(!session()->has('data'))
	{
		return redirect('/login');
	}
    return view('profile');
});
//login page
Route::get('/login', function () {
	if(session()->has('data'))
	{
		return redirect('/profile');
	}else
	 return view('login');
});
Route::post('loginsubmit','Users@loginsubmit');
//sign up page
Route::get('/create', function () {
	if(session()->has('data'))
	{
		return redirect('/profile');
	}else
    return view('signup');
});
//Route::get('create','Users@create');
Route::post('createsubmit','Users@createsubmit');


Route::get('sign','Users@signup');
Route::post('signupsubmit','Users@signsubmit');

