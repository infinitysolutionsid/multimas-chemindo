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

use App\Mail\contactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('homepage.index');
});
Route::get('/about-us', function () {
    return view('homepage.about');
});
Route::get('/contact-us', function () {
    return view('homepage.contact');
});
Route::get('/warehouse', function () {
    return view('homepage.warehouse');
});
Route::get('/fertilizers', function () {
    return view('homepage.ourfertilizers');
});
Route::get('/partners', function () {
    return view('homepage.partners');
});
Route::get('/faqs', function () {
    return view('homepage.faqs');
});
Route::post('/send-message', function (Request $request) {
    $datas = $request->all();
    Mail::to('info@multimaschemindo.com')->send(new contactUs($datas));
    // foreach ($data as $key => $value) {
    //     Mail::send('emails.contactUs', $value[0], function ($message) {
    //         $message->subject('There is a question from guest!');
    //         $message->from('guest@multimaschemindo.com');
    //         $message->to('info@multimaschemindo.com');
    //     });
    // }
    // return response()->json($data);
    return redirect('/contact-us')->with('msg', 'Your message has been completed send to us!');
});
