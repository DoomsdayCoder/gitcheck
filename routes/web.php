<?php

use App\Models\folders;
use App\Http\Controllers\UserManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FolderManager;
use App\Http\Controllers\LibraryManager;

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

Route::get('/',[UserManager::class,'rdrt']);
Route::get('/home',[UserManager::class,'home'])->middleware('auth');

Route::get('/login',[UserManager::class,'login'])->name('login');
Route::post('/authenticate',[UserManager::class,'signin']);

Route::get('/signup',[UserManager::class,'signup']);
Route::post('/register',[UserManager::class,'register']);


Route::get('/deleteComic/{library}',[LibraryManager::class,'mangaDrop'])->middleware('auth');

Route::get('/editprofile',[UserManager::class,'ProfileEdit'])->middleware('auth');
// entry form page
Route::get('/newentry',[LibraryManager::class,'entryform'])->middleware('auth');
Route::get('/updateComic/{library}',[LibraryManager::class,'updateManga'])->middleware('auth');
Route::get('/viewmore/{library}',[LibraryManager::class,'selectedManga'])->middleware('auth');
Route::post('/comicentry',[LibraryManager::class,'comicInsert'])->middleware('auth');
Route::put('/comicUpdate/{library}',[LibraryManager::class,'comicUpdate'])->middleware('auth');

Route::get('/folders', function() {
    return view('test',[
        'fdr' => folders::all()
    ]);
}) -> middleware('auth');

Route::put('/folderChange' , [FolderManager::class,'folderAssign'])->middleware('auth');

Route::post('/createFolder' , [FolderManager::class,'createFolder'])->middleware('auth');

Route::post('/deleteFolder' , [FolderManager::class,'deleteFolder'])->middleware('auth');


Route::post('/logout',[UserManager::class,'logout'])->name('logout');