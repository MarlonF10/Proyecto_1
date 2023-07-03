<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\ConsultingRoomController;
use App\Http\Controllers\SeverityTypeController;
use App\Http\Controllers\TreatmentTypeController;
use App\Http\Controllers\AntecedentController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\RecepcionistController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ExamTypeController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\AppointmentTimeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\MedicalFileController;
use App\Http\Controllers\SettingController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('areas', AreaController::class);
Route::resource('specialities', SpecialityController::class);
Route::resource('consulting-rooms', ConsultingRoomController::class);
Route::resource('severity-type', SeverityTypeController::class);
Route::resource('treatment-type', TreatmentTypeController::class);
Route::resource('antecedent', AntecedentController::class);
Route::resource('disease', DiseaseController::class);
Route::resource('administrator', AdministratorController::class);
Route::resource('doctor', DoctorController::class);
Route::resource('recepcionist', RecepcionistController::class);
Route::resource('patient', PatientController::class);
Route::resource('exam-type', ExamTypeController::class);
Route::resource('exam', ExamController::class);
Route::resource('consultation', ConsultationController::class);
Route::resource('prescription', PrescriptionController::class);
Route::resource('appointment-time', AppointmentTimeController::class);
Route::resource('appointment', AppointmentController::class);
Route::resource('medical-file', MedicalFileController::class);
Route::resource('setting', SettingController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
