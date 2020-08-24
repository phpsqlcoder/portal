<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::resource('patients', 'API\PatientController');
Route::resource('patient-medical-information', 'API\PatientMedicalInformationController');

Route::post('search-patient', 'API\PatientController@searchPatient');

Route::prefix('personnels')->group(function() {
    Route::get('fetch-personnels-that-has-schedule', 'API\PersonnelController@fetchPersonnelsThatHasSchedule');
    Route::get('fetch-all-doctors', 'API\PersonnelController@fetchAllDoctors');
    Route::get('fetch-all-nurses', 'API\PersonnelController@fetchAllNurses');
    Route::post('fetch-available-personnels', 'API\PersonnelController@fetchAvailablePersonnels');
});

Route::prefix('machines')->group(function() {
    Route::get('/', 'API\MachineController@index');
    Route::post('fetch-available-machines', 'API\MachineController@fetchAvailableMachines');
});

Route::prefix('schedules')->group(function() {
    Route::post('create-new-schedule', 'API\ScheduleController@store');
    Route::get('fetch-today-schedule', 'API\ScheduleController@fetchTodaySchedule');
});