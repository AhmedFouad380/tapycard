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



Route::get('/login', function () {
    return view('auth.login');
});
Route::post('Login', [\App\Http\Controllers\frontController::class, 'login']);

Route::group(['middleware' => ['admin']], function () {
    Route::get('/', function () {
        return view('Admin.index');
    });

    Route::get('Setting', [\App\Http\Controllers\frontController::class, 'Setting']);
    Route::get('logout', [\App\Http\Controllers\frontController::class, 'logout']);

    Route::get('Dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('Admin_setting', [\App\Http\Controllers\Admin\AdminController::class, 'index']);
    Route::get('Admin_datatable', [\App\Http\Controllers\Admin\AdminController::class, 'datatable'])->name('Admin.datatable.data');
    Route::get('delete-Admin', [\App\Http\Controllers\Admin\AdminController::class, 'destroy']);
    Route::post('store-Admin', [\App\Http\Controllers\Admin\AdminController::class, 'store']);
    Route::get('Admin-edit/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'edit']);
    Route::post('update-Admin', [\App\Http\Controllers\Admin\AdminController::class, 'update']);
    Route::get('/add-button-Admin', function () {
        return view('Admin/Admin/button');
    });

    Route::get('Card_setting', [\App\Http\Controllers\Admin\CardController::class, 'index']);
    Route::get('Card_datatable', [\App\Http\Controllers\Admin\CardController::class, 'datatable'])->name('Card.datatable.data');
    Route::get('delete-Card', [\App\Http\Controllers\Admin\CardController::class, 'destroy']);
    Route::post('store-Card', [\App\Http\Controllers\Admin\CardController::class, 'store']);
    Route::get('Card-edit/{id}', [\App\Http\Controllers\Admin\CardController::class, 'edit']);
    Route::post('update-Card', [\App\Http\Controllers\Admin\CardController::class, 'update']);
    Route::get('/add-button-Card', function () {
        return view('Admin/Card/button');
    });

    Route::get('Profile_setting', [\App\Http\Controllers\Admin\ProfileController::class, 'index']);
    Route::get('Profile_datatable', [\App\Http\Controllers\Admin\ProfileController::class, 'datatable'])->name('Profile.datatable.data');
    Route::get('delete-Profile', [\App\Http\Controllers\Admin\ProfileController::class, 'destroy']);
    Route::post('store-Profile', [\App\Http\Controllers\Admin\ProfileController::class, 'store']);
    Route::get('Profile-edit/{id}', [\App\Http\Controllers\Admin\ProfileController::class, 'edit']);
    Route::post('update-Profile', [\App\Http\Controllers\Admin\ProfileController::class, 'update']);
    Route::get('/add-button-Profile', function () {
        return view('Admin/Profile/button');
    });
    Route::get('get-Profiles/{id}', [\App\Http\Controllers\Admin\ProfileController::class, 'getProfiles']);

    Route::get('Profile_elements/{id}', [\App\Http\Controllers\Admin\ProfileElementsController::class, 'index']);
    Route::get('Profile_elements_datatable', [\App\Http\Controllers\Admin\ProfileElementsController::class, 'datatable'])->name('Profile_elements.datatable.data');
    Route::get('delete-Profile_elements', [\App\Http\Controllers\Admin\ProfileElementsController::class, 'destroy']);
    Route::post('store-Profile_elements', [\App\Http\Controllers\Admin\ProfileElementsController::class, 'store']);

    Route::get('/add-button-social/{id}', function ($id) {
        return view('Admin/ProfileElements/socialButton',compact('id'));
    });
    Route::get('/add-button-LinksButton/{id}', function ($id) {
        return view('Admin/ProfileElements/LinksButton',compact('id'));
    });
    Route::get('/add-button-ImagesButton/{id}', function ($id) {
        return view('Admin/ProfileElements/ImagesButton',compact('id'));
    });

    Route::get('/add-button-VideoButton/{id}', function ($id) {
        return view('Admin/ProfileElements/VideoButton',compact('id'));
    });

    Route::get('/add-button-ContactButton/{id}', function ($id) {
        return view('Admin/ProfileElements/ContactButton',compact('id'));
    });

    Route::post('Store_BusinessHours',[\App\Http\Controllers\Admin\ProfileElementsController::class,'Store_BusinessHours']);
    Route::get('Appointments_datatable', [\App\Http\Controllers\Admin\AppointmentController::class, 'datatable'])->name('Appointments.datatable.data');
    Route::get('delete-Appointments', [\App\Http\Controllers\Admin\AppointmentController::class, 'destroy']);
    Route::post('store-Appointments', [\App\Http\Controllers\Admin\AppointmentController::class, 'store']);
    Route::get('/add-button-Appointments/{id}', function ($id) {
        return view('Admin/ProfileElements/AppointmentsButton',compact('id'));
    });


    Route::get('AppointmentsRelation_setting', [\App\Http\Controllers\Admin\AppointmentsRelationController::class, 'index']);
    Route::get('AppointmentsRelation_datatable', [\App\Http\Controllers\Admin\AppointmentsRelationController::class, 'datatable'])->name('AppointmentsRelation.datatable.data');
    Route::get('delete-AppointmentsRelation', [\App\Http\Controllers\Admin\AppointmentsRelationController::class, 'destroy']);
    Route::post('store-AppointmentsRelation', [\App\Http\Controllers\Admin\AppointmentsRelationController::class, 'store']);
    Route::get('AppointmentsRelation-edit/{id}', [\App\Http\Controllers\Admin\AppointmentsRelationController::class, 'edit']);
    Route::post('update-AppointmentsRelation', [\App\Http\Controllers\Admin\AppointmentsRelationController::class, 'update']);
    Route::get('/add-button-AppointmentsRelation', function () {
        return view('Admin/AppointmentsRelation/button');
    });

        Route::get('ExchangeContact_setting', [\App\Http\Controllers\Admin\ExhangeContactController::class, 'index']);
    Route::get('ExchangeContact_datatable', [\App\Http\Controllers\Admin\ExhangeContactController::class, 'datatable'])->name('ExchangeContact.datatable.data');
    Route::get('delete-ExchangeContact', [\App\Http\Controllers\Admin\ExhangeContactController::class, 'destroy']);
    Route::post('store-ExchangeContact', [\App\Http\Controllers\Admin\ExhangeContactController::class, 'store']);
    Route::get('ExchangeContact-edit/{id}', [\App\Http\Controllers\Admin\ExhangeContactController::class, 'edit']);
    Route::post('update-ExchangeContact', [\App\Http\Controllers\Admin\ExhangeContactController::class, 'update']);
    Route::get('/add-button-ExchangeContact', function () {
        return view('Admin/ExchangeContact/button');
    });

});

Route::get('lang/{lang}', function ($lang) {

    if (session()->has('lang')) {
        session()->forget('lang');
    }
    if ($lang == 'en') {
        session()->put('lang', 'en');
    } else {
        session()->put('lang', 'ar');
    }


    return back();
});

