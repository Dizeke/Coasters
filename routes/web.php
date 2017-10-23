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

Route::get('/', function (){
  return view('home');
});

Route::get('/home', function (){
  return view('home');
});

Route::get('/facts', function() {
  return view('facts');
});

Route::get('/about-us', function() {
  return view('about-us');
});

Route::get('/contact-us', function() {
  return view('contact-us');
});

Route::post('/contact-us/send', 'InquiryController@sendMail');

Route::get('/contact-us/sent', function(){
  return view('mail_template.inquiry-sent');
});

Route::get('/contact-us/failed', function(){
  return view('mail_template.inquiry-failed');
});

Route::get('/download/brochure', function(){
  $file= public_path(). "/coaster.pdf";
  $headers = array(
   'Content-Type: application/pdf',
  );

   return Response::download($file, 'brochure.pdf', $headers);
});
