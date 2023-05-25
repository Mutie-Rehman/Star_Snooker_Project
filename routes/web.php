<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController; //add the ControllerNameSpace
use App\Http\Controllers\CustomAuthController; 
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\FileController; 
 
Route::get('/', function () {
    return view('welcome');
});


/* |--------------------------------------------------------------------------
   | Player Routes 
   |-------------------------------------------------------------------------- */ 
Route::resource("/player", PlayerController::class);
Route::get("/main", [PlayerController::class, 'view']);


/* |--------------------------------------------------------------------------
   | Login Authentication Routes 
   |-------------------------------------------------------------------------- */ 
   Route::get('/dashboard', [CustomAuthController::class, 'dashboard']); 
   Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
   Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
   Route::get('/registration', [CustomAuthController::class, 'registration'])->name('register-user');
   Route::post('/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
   Route::get('/signout', [CustomAuthController::class, 'signOut'])->name('signout');
   

   /* |--------------------------------------------------------------------------
   |  Contact Routes 
   |-------------------------------------------------------------------------- */ 
   Route::get('/contact-us', [ContactController::class, 'index']);
   Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.us.store');

   /* |--------------------------------------------------------------------------
   |  Cue and Table in PlayerController Routes 
   |------------------------------------------------------------------------- */ 
   Route::get("/cues", [PlayerController::class, 'cue']);
   Route::get("/tables",[PlayerController::class,'table']);
   Route::get("/welcome", [PlayerController::class, 'wlcm']);

   /* |--------------------------------------------------------------------------   
   |  File Routes 
   |-------------------------------------------------------------------------- */ 
   // Route::get('/file_upload', [ContactController::class, 'open_file_form']);
   // Route::get('/show_data', [ContactController::class, 'show_file_data']);
   // Route::get('/view_file/{id}', [ContactController::class, 'file_view']);
   // Route::get('/download_file/{file}', [ContactController::class, 'file_download']);