<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post("/auth", 'AuthController@login');

include('api_safivisits.php');
include('api_safifees.php');
include('api_safirepay.php');
