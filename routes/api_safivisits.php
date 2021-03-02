<?php
use Illuminate\Support\Facades\Route;

// Visits
Route::get('/visits/{timestamp}', 'VisitController@get_withTimestamp')->middleware(\App\Http\Middleware\CheckAuthed::class);
Route::put('/visit/{visit}/report', 'VisitController@report')->middleware(\App\Http\Middleware\CheckAuthed::class);
Route::get('/visit/{visit}', 'VisitController@get_byId')->middleware(\App\Http\Middleware\CheckAuthed::class);
Route::delete('/visit/{visit}/cancel', 'VisitController@cancel')->middleware(\App\Http\Middleware\CheckAuthed::class);

// Visit Reports
Route::get('/visit/{visit}/report', 'VisitReportController@get_fromVisit')->middleware(\App\Http\Middleware\CheckAuthed::class);
Route::put('/visit/{visit}/report/content', 'VisitReportController@put_content')->middleware(\App\Http\Middleware\CheckAuthed::class);
Route::put('/visit/{visit}/report/satisfaction', 'VisitReportController@put_satisfaction')->middleware(\App\Http\Middleware\CheckAuthed::class);

//Get Employee
Route::get('/employees/visitor', 'EmployeeController@allVisitor')->middleware(\App\Http\Middleware\CheckAuthed::class);
Route::get('/employees/delegate', 'EmployeeController@allDelegate')->middleware(\App\Http\Middleware\CheckAuthed::class);

//Modify Employee
Route::get('/employees/employee/{id}', 'EmployeeController@getEmployeeById')->middleware(\App\Http\Middleware\CheckAuthed::class);
Route::put('/employees/modify/{employee}','EmployeeController@modifyEmployee')->middleware(\App\Http\Middleware\CheckAuthed::class);

//Create Employee
Route::post('/employees/create','EmployeeController@createEmployee');

//Get Supply
Route::get('/supply/medicine','SupplyController@getMedicine')->middleware(\App\Http\Middleware\CheckAuthed::class);

//Modify Supply
Route::get('/supply/medicine/{id}','SupplyController@getMedicineById')->middleware(\App\Http\Middleware\CheckAuthed::class);
Route::put('/supply/modify/{supply}','SupplyController@modifySupply');
