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




Route::group(['namespace' => 'API'], function () {
    Route::resource('patients', 'PatientController');
    Route::resource('patient-medical-information', 'PatientMedicalInformationController');
    Route::post('search-patient', 'PatientController@searchPatient');

    Route::group(['prefix' => 'personnels'], function () {
        Route::get('/', 'PersonnelController@index');
        Route::post('/', 'PersonnelController@store');
        Route::get('fetch-personnels-that-has-schedule', 'PersonnelController@fetchPersonnelsThatHasSchedule');
        Route::get('fetch-all-doctors', 'PersonnelController@fetchAllDoctors');
        Route::get('fetch-all-nurses', 'PersonnelController@fetchAllNurses');
        Route::post('fetch-available-personnels', 'PersonnelController@fetchAvailablePersonnels');
        Route::post('fetch-personnels-that-has-schedule-by-date', 'PersonnelController@fetchPersonnelsThatHasScheduleByDate');
        Route::put('update-status/{personnel}', 'PersonnelController@toggleStatus');
        Route::post('update-data/{personnel}', 'PersonnelController@updateData');
    });

    Route::group(['prefix' => 'machines'], function () {
        Route::get('/', 'MachineController@index');
        Route::post('/', 'MachineController@store');
        Route::post('fetch-available-machines', 'MachineController@fetchAvailableMachines');
        Route::get('fetch-machines-that-has-schedule', 'MachineController@fetchMachinesThatHasSchedule');
        Route::post('fetch-machines-that-has-schedule-by-date', 'MachineController@fetchMachinesThatHasScheduleByDate');
    });

    Route::group(['prefix' => 'schedules'], function () {
        Route::post('create-new-schedule', 'ScheduleController@store');
        Route::put('/{id}', 'ScheduleController@update');
        Route::put('cancel-schedule/{id}', 'ScheduleController@cancelSchedule');
        Route::get('fetch-today-schedule', 'ScheduleController@fetchTodaySchedule');
        Route::put('editing-schedule/{id}', 'ScheduleController@editingSchedule');
        Route::post('disable-editing', 'ScheduleCOntroller@disableEditing');
    });
});



