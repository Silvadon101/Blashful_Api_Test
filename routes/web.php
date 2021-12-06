<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpFormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ContactformController;
use App\Events\Message;
use App\Http\Controllers\HistoryController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;



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

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/appointmentform', function () {
    return view('appointmentform');
});


Route::get('/signup', function () {
    return view('signup');
});


Route::get('/login', function () {
    return view('login');
});


// Route To Sign Up Controller
Route::post('/signup', [SignUpFormController::class,'addData']);

// Route To Login Controller **User**
Route::post('/login', [LoginController::class,'login']);


// Route To Login Controller **Admin**
// Route::post('/login', [LoginController::class,'adminlogin']);


route::get('/landing',[LoginController::class,'checksession']);

route::get('/logout',[LoginController::class,'endsession']);


// Route To Mail Controller

route::post('/appointmentform',[MailController::class,'apptform']);







Route::get('/contactform', function () {
    return view('contactform');
});






// Route to ContactForm Controller
route::post('/contactform',[ContactformController::class,'contactform']);


// Message View (Delete)

// Route::get('/chat', function () {
//     return view('chat');
// });


//Route to order hsitory in table format

Route::get('/history', [HistoryController::class, 'history']);



// Route To Delete Record Controller 

Route::get('delete/{id?}',[HistoryController::class,'delete']);


// Route To Edit Form
Route::get('/edit', function () {
    return view('edit');
});


// Route to Update Form Info

Route::get('/edit/{id?}',[HistoryController::class, 'showdata']); //Controller Working



// Saving Database After Making Updates Controller

// To send Message

// Route::post('/send-message', function (Request $request){
//     event(
//         new Message(
//       $request->input('username'),
//       $request->input('message')
//       )
//     );
// });







