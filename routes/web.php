<?php

use App\Http\Controllers\noteController;
use App\Models\note;
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
    return view('welcome');
});


// Route::get("/note", noteController::class, "index")->name("note.index");
// Route::get("/note/create", noteController::class, "create")->name('note.create');
// Route::post("/note", noteController::class, "store")->name("note.store");
// Route::get("/note/{id}", noteController::class, "show")->name('note.show');
// Route::get("/note/{id}/edit", noteController::class, "edit")->name("note.edit");
// Route::put("/note/update{id}", noteController::class, "update")->name("update");
// Route::delete('/note/{id}', noteController::class, "destroy")->name("note.destroy");

Route::resource('note', noteController::class);