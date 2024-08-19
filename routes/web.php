<?php

use App\Models\Committee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AidController;
use App\Http\Controllers\JKKController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\aid_resController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\CommitteeComtroller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Middleware\Role;
use App\Models\Resident;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/admin/login', [AuthenticatedSessionController::class, 'createAdmin'])->name('admin.login');
Route::get('/staff/login', [AuthenticatedSessionController::class, 'createStaff'])->name('staff.login');
Route::get('/jkk/login', [AuthenticatedSessionController::class, 'createJkk'])->name('jkk.login');

//Route::get('/', function () {
//return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('markAsRead',function() {auth()->user()->unreadNotifications->markAsRead(); return redirect()->back();})->name('markRead');
    Route::get('/admin/admin_dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/listAllStaff', [StaffController::class, 'listAllStaff'])->name('admin.listAllStaff');
    Route::post('staff/store', [StaffController::class, 'store'])->name('staff.store');
    Route::post('/staff-update/{SID}', [StaffController::class, 'update'])->name('staff.update');
    Route::get('/admin/delete/{SID}', [StaffController::class, 'destroy'])->name('staff.destroy');

    Route::get('/position', [PositionController::class, 'index'])->name('admin.listAllPosition');
    Route::post('/position-store', [PositionController::class, 'store'])->name('position.store');
    Route::post('/position-update/{PosID}', [PositionController::class, 'update'])->name('position.update');
    Route::delete('/position-destroy/{PosID}', [PositionController::class, 'destroy'])->name('position.destroy');

    Route::get('/committee', [CommitteeComtroller::class, 'index'])->name('admin.listAllCommittee');
    Route::post('/committee-store', [CommitteeComtroller::class, 'store'])->name('committee.store');
    Route::post('/committee-update/{ComID}', [CommitteeComtroller::class, 'update'])->name('committee.update');
    Route::get('/delete/{ComID}', [CommitteeComtroller::class, 'destroy'])->name('committee.destroy');


    Route::post('/store-aid', [AidController::class, 'store'])->name('aid.store');
    Route::get('/aid', [AidController::class, 'index'])->name('admin.listAllInventory');
    Route::post('/update-aid/{AidID}', [AidController::class, 'update'])->name('update.aid');
    Route::get('/adminn/delete/{AidID}', [AidController::class, 'destroy'])->name('destroy.aid');

    Route::get('/aid_res', [aid_resController::class, 'index'])->name('admin.listAllLeaderLocation');

    Route::get('/resident', [ResidentController::class, 'index'])->name('resident.index');
    Route::get('/view-resident',[ResidentController::class,'view'])->name('view.resident');
   // Route::post('/store-resident', [ResidentController::class, 'store'])->name('resident.store');
   // Route::post('/update-resident/{ResID}', [ResidentController::class, 'update'])->name('update.resident');
    Route::delete('/destroy-resident/{ResID}', [ResidentController::class, 'destroy'])->name('destroyy.resident');
    
    Route::get('/jkk', [JKKController::class, 'index'])->name('admin.listAllJKK');
    Route::post('/store-jkk', [JKKController::class, 'store'])->name('jkk.store');
    Route::post('/update-jkk/{JKKID}', [JKKController::class, 'update'])->name('update.jkk');
    Route::get('/delete/{JKKID}', [JKKController::class, 'destroy'])->name('destroy.jkk');

    Route::get('/profile', [AdminController::class, 'Adminedit'])->name('profile.Adminedit');
    Route::patch('/profile', [AdminController::class, 'AdminUpdate'])->name('profile.AdminUpdate');

    Route::delete('/delete-aid_res', [aid_resController::class, 'deleteAll'])->name('delete.aid_res');   
     Route::post('/add-aid_res', [aid_resController::class, 'store'])->name('aid_res.store');


});

Route::middleware('auth', 'role:staff')->group(function () {
    Route::get('markRead',function() {auth()->user()->unreadNotifications->markAsRead(); return redirect()->back();})->name('markasRead');

    Route::get('/staff/staff_dashboard', [aid_resController::class, 'staffList'])->name('staff.dashboard');
    Route::post('/store-aid_res', [aid_resController::class, 'Staffstore'])->name('aid_res.storee');

    Route::get('/profileee', [ProfileController::class, 'Staffedit'])->name('profile.Staffedit');
    Route::patch('/profileee', [ProfileController::class, 'StaffUpdate'])->name('profile.StaffUpdate');
});

Route::middleware('auth', 'role:jkk')->group(function () {
    Route::get('/jkk/jkk_dashboard', [ResidentController::class, 'ResidentJKK'])->name('jkk.dashboard');
    Route::post('/store-residentt', [ResidentController::class, 'store'])->name('resident.store');
    Route::get('/view-residentt',[ResidentController::class,'viewJKK'])->name('view.resident');
    Route::post('/update-residentt/{ResID}', [ResidentController::class, 'update'])->name('update.resident');
    Route::delete('/destroy-residentt/{ResID}', [ResidentController::class, 'destroyJKK'])->name('destroy.resident');

    Route::get('/profilee', [ProfileController::class, 'JKKEdit'])->name('profile.JKKEdit');
    Route::patch('/profilee', [ProfileController::class, 'JKKUpdate'])->name('profile.JKKUpdate');
    Route::PUT('/edit-JKKPwd',[PasswordController::class, 'update'])->name('password.update');
});





/* Route::get('/donation', [DonationController::class, 'index'])->name('donation');
            Route::get('/create-donation', [DonationController::class, 'create'])->name('create.donation');
            Route::post('/store-donation', [DonationController::class, 'store'])->name('store.donation');
            Route::get('/view-donation/{id}', [DonationController::class, 'show'])->name('show.donation');
            Route::get('/edit-donation/{id}', [DonationController::class, 'edit'])->name('edit.donation');
            Route::post('/update-donation/{id}', [DonationController::class, 'update'])->name('update.donation');
            Route::delete('/destroy-donation/{donation}', [DonationController::class, 'destroy'])->name('destroy.donation');
*/

require __DIR__ . '/auth.php';
