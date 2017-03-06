<?php

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
    return view('home.index');
});

Route::post('/message', function (\Illuminate\Http\Request $request) {
$message_success = 'We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.';
	\Mail::send('emails.message', ['request' => $request], function($message) use ($request) {
        $message->from($request->email, 'New Message From Contact Form');
        $message->to('info@cred-it.ph')->subject($request->subject);
    });
    return '{ "alert": "success", "message": "' . $message_success . '" }';
});