<?php

use App\Http\Controllers\ {
    DoctorController,
    UserController,
    PatientController,
    PDFController,
    ScheduleController,
    NotificationController,


};


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



Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/doctor', function() {
    return view(('doctor'));
});
///Rotas medicos
Route::get('/doctor',[DoctorController::class,'doctor'])->name('doctor');
Route::get('/createdoctor',[DoctorController::class,'createdoctor'])->name('createdoctor');
Route::post('/doctorstore',[DoctorController::class,'doctorstore'])->name('doctorstore');
Route::delete('doctordelete/{id}', [DoctorController::class,'doctordelete'])->name('doctordelete');
Route::get('doctoredit/{id}', [DoctorController::class,'doctoredit'])->name('doctoredit');
Route::put('doctorupdtade/{id}', [DoctorController::class,'doctorupdtade'])->name('doctorupdtade');

///Rotas Pacientes
Route::get('/patient',[PatientController::class,'patient'])->name('patient');
Route::get('/createpatient',[PatientController::class,'createpatient'])->name('createpatient');
Route::post('/patientstore', [PatientController::class,'patientstore'])->name('patientstore');
Route::delete('/patient/{id}', [PatientController::class, 'patientdelete'])->name('patientdelete');
Route::get('/patientedit/{id}/edit', [PatientController::class, 'patientedit'])->name('patientedit');
Route::put('/patientupdate/{id}/edit', [PatientController::class, 'patientupdate'])->name('patientupdate');


//Rotas Agendametos
Route::get('/schedule', [ScheduleController::class,'schedule'])->name('schedule');
Route::get('createschedule',[ScheduleController::class,'createschedule'])->name('createschedule');
Route::post('/schedulestore',[ScheduleController::class,'schedulestore'])->name('schedulestore');
Route::delete('/schedule/{id}',[ScheduleController::class,'scheduledelete'])->name('scheduledelete');
Route::get('/{id}/edit',[ScheduleController::class,'scheduleedit'])->name('scheduleedit');
Route::put('atualizar/{id}',[ScheduleController::class,'scheduleupdate'])->name('scheduleupdate.update');
Route::get('/schedulesim', [ScheduleController::class,'schedulesim'])->name('schedulesim');
Route::get('/scheduletodas', [ScheduleController::class,'scheduletodas'])->name('scheduletodas');

//Pdf lista de consultas
Route::get('/schedulespdf', [PDFController::class, 'exportToPDF'])->name('schedulespdf');
Route::get('/schedulepdf/{id}', [PDFController::class, 'exportOnePDF'])->name('schedulepdf');

//sms
Route::get('send-sms-notification', [NotificationController::class, 'sendSmsNotificaition']);

/// teste

Route::get('/users',[UserController::class,'users']);

////Route::get('/layout', [SiteController::class,'layout']
