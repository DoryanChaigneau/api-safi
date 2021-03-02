<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// FrontOffice
Route::get('/getFixedCosts','PackageTypeController@getAll');


// BackOffice
Route::post('/createAccountEmployee','EmployeeController@createEmployee');
Route::put('/modifyAccountEmployee','EmployeeController@modifyEmployee');
Route::get('/allAccountsEmployees','EmployeeController@allEmployees');
Route::post('/researchEmployee','EmployeeController@researchEmployee');

//Route::post('/connexionRole','EmployeeController@connexionRole');
