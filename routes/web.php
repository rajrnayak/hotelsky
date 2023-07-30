<?php

use App\Http\Controllers\RoomCategoryController;
use App\Http\Controllers\AddRoomController;
use App\Http\Controllers\RoomBookingController;
use App\Http\Controllers\RoomHistoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/room_category_page', [RoomCategoryController::class, 'RoomCategory'])->name('room_category.page');
    Route::post('/insert_category_page', [RoomCategoryController::class, 'InsertRoomCaregory'])->name('insert_room_category.page');
    Route::get('/view_category_page', [RoomCategoryController::class, 'ViewCategory'])->name('view_category.page');
    Route::get('/edit_category_page/{id}', [RoomCategoryController::class, 'EditCategory'])->name('edit_category.page');
    Route::post('/update_category_page', [RoomCategoryController::class, 'UpdatetRoomCategory'])->name('update_room_category.page');
    Route::get('/delete_category_page/{id}', [RoomCategoryController::class, 'DeleteRoomCategory'])->name('delete_category.page');

    Route::get('/add_room_page', [AddRoomController::class, 'AddRoom'])->name('add_room.page');
    Route::post('/insert_room_page', [AddRoomController::class, 'InsertRoom'])->name('insert_room.page');
    Route::get('/view_room_page', [AddRoomController::class, 'ViewRoom'])->name('view_room.page');
    Route::get('/edit_room_page/{id}', [AddRoomController::class, 'EditRoom'])->name('edit_room.page');
    Route::post('/update_room_page', [AddRoomController::class, 'UpdateRoom'])->name('update_room.page');
    Route::get('/delete_room_page/{id}', [AddRoomController::class, 'DeleteRoom'])->name('delete_room.page');

    Route::get('/book_room_page/{id}', [RoomBookingController::class, 'GetDetails'])->name('book_room.page');
    Route::get('/room_booking_page', [RoomBookingController::class, 'RoomBooking'])->name('room_booking.page');
    Route::post('/insert_room_booking_page', [RoomBookingController::class, 'InsertRoomBooking'])->name('insert_room_booking.page');
    Route::get('/room_history_page', [RoomBookingController::class, 'RoomHistory'])->name('room_history.page');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
