
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

//about page
Route::get('/about', function () {
    return view('about');
});

//contact page
Route::get('/contact', function () {
    return view('contact');
});  

//dashboard page
Route::get('/dashboard', function () {
    return view('dashboard');
});

//welcome page
Route::get('/welcome', function () {
	if(!session()->has('data'))
	{
		return redirect('/login');
	}
    return view('welcome');
});


//addexpense
Route::get('/addexpense', function () {
   //session()->forget("_KUL");
   //session()->forget('data');
   return redirect('/addexpense');
});


//logout
Route::get('logout','Users@logout');

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
Route::get('/signup', function () {
	if(session()->has('data'))
	{
		return view('/signup');
	}else
    return view('signup');
});
//Route::get('create','Users@create');
Route::post('createsubmit','Users@createsubmit');
 

 //group

Route::get('group','Groups@group');
Route::post('creategroup','Groups@creategroup');


//members

Route::get('addmembers','Members@members');
Route::get('/membersubmit', function () {
	//die("i m here");
});
Route::post('membersubmit','Members@membersubmit');


//addExpense
Route::get('addexpense','addexpenses@expense');
Route::post('expensesubmit','addexpenses@expensesubmit');

// calculate expense
Route::get('viewExpense','ViewExs@ViewEx');

Route::get('calculate','ViewExs@calculate');
 
Route::post('calculate_submit','ViewExs@calculate_submit');
