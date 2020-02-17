<?php
use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/', function () {
    return view('search');
})->name('search');


Route::post('/checkResult', 'StudentController@checkResult')->name('checkResult');


Route::group(['prefix'=>'admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/FileCreateStudent', 'StudentController@create_Student')->name('admin.createStudent');
  
    // section and class
    Route::resource('section', 'SectionController');
    Route::resource('class', 'ClassController');

    // student exportImport
    Route::get('/studentexport', 'FileController@student_export')->name('student.export');
    Route::post('/studentimport', 'FileController@student_import')->name('student.import');
   

    // marks exportImport

    Route::get('/marksexport', 'FileController@marks_export')->name('marks.export');
    Route::post('/marksimport', 'FileController@marks_import')->name('marks.import');

    // Admin subject view
    Route::get('/marksview', 'SubjectController@all_marks_View')->name('admin.marks_show');
    Route::get('/FileCreateSubject', 'SubjectController@create_Subject')->name('admin.createSubject');

     // Admin student view
    Route::get('/studentview', 'StudentController@all_student_View')->name('admin.student_show');
    Route::post('/studenCreate', 'StudentController@store_student')->name('admin.student_store');
    Route::post('/studenDelete/{id}', 'StudentController@delete_student')->name('admin.student_delete');
    Route::post('/studenUpdate/{id}', 'StudentController@update_student')->name('admin.student_update');

    // admin profile
    Route::get('/profile', 'AdminController@profile')->name('admin.profile');

    // admin avatar
    // Route::get('avatar', 'AdminController@avatar');
    // Route::post('update/avatar', 'AdminController@update_avatar');
   
  

});





// search controller
Route::get('/search', 'SearchController@search');
Route::get('/searchStudent', 'SearchController@searchView')->name('searchView');




