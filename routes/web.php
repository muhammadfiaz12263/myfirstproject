<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {

//     $persons=[
//         "Muhammad Fiaz",
//         "Adnan Ahmed",
//         "Bilal Ahmed",
//         "Abdullah Azam",
//         "Syed Tayyab"
        
//     ];
//     // return view('welcome', ["persons" => $persons]);
//     // return view('welcome')->with([ "persons" => $persons ]);
//     // return view('welcome')->withPersons( $persons );

//     // return view('welcome', [
//     //     "persons" => $persons,
//     //     "name" => "Muhammad Fiaz"
//     // ]);
//     return view('welcome', [
//         "persons" => $persons,
//         "name" => "Muhammad Fiaz",
//         "js" => "<script>alert('Hey you are havked');</script>"
//     ]);
// });
// Route::get('home', function () {
//     return view('welcome');
// });
// Route::get('about', function () {
//     return view('about');
// });
// Route::get('contact', function () {
//     return view('contact');
// });


//   *************    New Method Using custom Controllers    *********



Route::get('/', "App\Http\Controllers\ProjectController@index");
Route::get('/contact', "App\Http\Controllers\ProjectController@contact");
// Route::get('/about', "App\Http\Controllers\ProjectController@about");

// only For query string i.e http://myfirstproject.com/about/something

// Route::get('/about/{str}', "App\Http\Controllers\ProjectController@about");

// for optional query string i.e 
// http://myfirstproject.com/about
// http://myfirstproject.com/about/something

Route::get('/about/{str?}', "App\Http\Controllers\ProjectController@about");
Route::get('/database', "App\Http\Controllers\ProjectController@database");


// Route::get('about/{str?}', function ($str = null) {
//     // return $name;
//     dump( $str );
//     // return view('about', ["str" => $str]);
// });

//  ********* CRUD Operations Start **********

// Route::get('/crud', 'App\Http\Controllers\CrudController@index');
// Route::get('/crud/create', 'App\Http\Controllers\CrudController@create');
// Route::post('/crud', 'App\Http\Controllers\CrudController@store');
// Route::get('/crud/{id}', 'App\Http\Controllers\CrudController@show');
// Route::get('/crud/{id}/edit', 'App\Http\Controllers\CrudController@edit');
// Route::patch('/crud/{id}', 'App\Http\Controllers\CrudController@update');
// Route::delete('/crud/{id}', 'App\Http\Controllers\CrudController@destroy');


// Route::get('/employees', 'App\Http\Controllers\EmployeesController@index');
// Route::get('/employees/create', 'App\Http\Controllers\EmployeesController@create');
// Route::post('/employees', 'App\Http\Controllers\EmployeesController@store');
// Route::get('/employees/{id}', 'App\Http\Controllers\EmployeesController@show');
// Route::get('/employees/{id}/edit', 'App\Http\Controllers\EmployeesController@edit');
// Route::patch('/employees/{id}', 'App\Http\Controllers\EmployeesController@update');
// Route::delete('/employees/{id}', 'App\Http\Controllers\EmployeesController@destroy');

//         **** Resource Controller : Best approach for CRUD Operations ****



// Route::resource('crud',CrudController::class);
// Route::resource('employees',EmployeesController::class);
Route::resources([
    'crud' => CrudController::class,
    'employees'=> EmployeesController::class,
    'users' => UsersController::class
]);

//  ********* CRUD Operations End **********

//  ********* Students & Phones (One to One Relation) Start **********


Route::get('/students', 'App\Http\Controllers\StudentsController@index');
Route::get('/students/phone-details/{id?}', 'App\Http\Controllers\StudentsController@phone');
Route::get('/phones', 'App\Http\Controllers\PhonesController@index');
Route::get('/owner/{number?}', 'App\Http\Controllers\PhonesController@owner');

//  ********* Students & Phones (One to One Relation) End **********


//  ********* Students & Posts (One to many Relation) End **********


Route::get('/posts', 'App\Http\Controllers\PostsController@index');
Route::get('/creator/post/{id?}', 'App\Http\Controllers\PostsController@creator');
Route::get('/{id?}/posts', 'App\Http\Controllers\StudentsController@posts');

//  ********* Students & Posts (One to many Relation) End **********



//  ********* Students & Courses (Many to many Relation) Start **********


Route::get('/students/create', 'App\Http\Controllers\StudentsController@create');
Route::post('/students', 'App\Http\Controllers\StudentsController@store');
Route::get('/{id?}/courses', 'App\Http\Controllers\StudentsController@courses');
Route::get('/courses', 'App\Http\Controllers\CoursesController@index');
Route::get('/course/assigned-students/{id?}', 'App\Http\Controllers\CoursesController@assigned_students');

//  ********* Students & Courses (Many to many Relation) End **********


//  ********* Teachers (Soft Delete) Start **********


Route::get('/teachers', 'App\Http\Controllers\TeachersController@index');
Route::delete('/teachers/{id?}', 'App\Http\Controllers\TeachersController@destroy');
Route::post('/teachers/restore/{id?}', 'App\Http\Controllers\TeachersController@restore');
Route::delete('/teachers/delete/{id?}', 'App\Http\Controllers\TeachersController@delete');

// Route::get('/teachers/all_restore', 'App\Http\Controllers\TeachersController@all_restore');
// Route::delete('/teachers/soft_delete', 'App\Http\Controllers\TeachersController@soft_delete_for_all');
// Route::delete('/teachers/hard_delete', 'App\Http\Controllers\TeachersController@hard_delete_for_all');


//  ********* Teachers (Soft Delete) End **********

//  ********* Middleware (CheckAge) Start **********


Route::get('/watch/movie', 'App\Http\Controllers\MoviesController@index');
Route::post('/watch/movie', 'App\Http\Controllers\MoviesController@checkAge')->middleware('CheckAge');
// Route::post('/watch/movie', 'App\Http\Controllers\MoviesController@checkAge');
Route::get('/watch/movie/now', function(){
    return view('movies.movies');
});
Route::get('/watch/cartoons', function(){
    return view('cartoons.cartoons');
});


// Route::get('/teachers/all_restore', 'App\Http\Controllers\TeachersController@all_restore');
// Route::delete('/teachers/soft_delete', 'App\Http\Controllers\TeachersController@soft_delete_for_all');
// Route::delete('/teachers/hard_delete', 'App\Http\Controllers\TeachersController@hard_delete_for_all');


//  ********* Middleware (CheckAge) End **********

// Auth::routes();
?>