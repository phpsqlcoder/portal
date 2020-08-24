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
    Route::get('/', 'API\PersonnelController@index');
    Route::post('/', 'API\PersonnelController@store');
    Route::get('fetch-personnels-that-has-schedule', 'API\PersonnelController@fetchPersonnelsThatHasSchedule');
    Route::get('fetch-all-doctors', 'API\PersonnelController@fetchAllDoctors');
    Route::get('fetch-all-nurses', 'API\PersonnelController@fetchAllNurses');
    Route::post('fetch-available-personnels', 'API\PersonnelController@fetchAvailablePersonnels');
    Route::post('fetch-personnels-that-has-schedule-by-date', 'API\PersonnelController@fetchPersonnelsThatHasScheduleByDate');
});

Route::prefix('machines')->group(function() {
    Route::get('/', 'API\MachineController@index');
    Route::post('/', 'API\MachineController@store');
    Route::post('fetch-available-machines', 'API\MachineController@fetchAvailableMachines');
    Route::get('fetch-machines-that-has-schedule', 'API\MachineController@fetchMachinesThatHasSchedule');
    Route::post('fetch-machines-that-has-schedule-by-date', 'API\MachineController@fetchMachinesThatHasScheduleByDate');
});

Route::prefix('schedules')->group(function() {
    Route::post('create-new-schedule', 'API\ScheduleController@store');
    Route::get('fetch-today-schedule', 'API\ScheduleController@fetchTodaySchedule');
});