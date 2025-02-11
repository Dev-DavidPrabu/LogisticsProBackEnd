<?php

use App\Http\Controllers\Vehicles\VehicleBodyController;
use App\Http\Controllers\Vehicles\VehicleCapacityController;
use App\Http\Controllers\Vehicles\VehicleMasterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vehicles\VehicleTypeController;
use App\Http\Controllers\Vehicles\VehicleByTypeController;
use App\Http\Controllers\Vehicles\VehiclesActiveController;

/*
|--------------------------------------------------------------------------
| API Routes For ALL Vechile Related Routes
|--------------------------------------------------------------------------
*/


Route::group(["middleware"=>"auth:sanctum"],function()
{
        //after the auth  have been implemented move the below routes inside the middle ware
});


Route::get('vehicleType',VehicleTypeController::class);
Route::get('vehicleBody',VehicleBodyController::class);


Route::apiResource('vehicleCapacity',VehicleCapacityController::class);

Route::apiResource('vehicles',VehicleMasterController::class);
//avaiable vehicles which are not assigned
Route::get('vehicles/type/{id}',VehicleByTypeController::class);
