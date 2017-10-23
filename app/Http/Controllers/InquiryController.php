<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Mail;

class InquiryController extends Controller
{
    //

    public function sendMail(Request $request){
      $company_name = $request->input('company_name');
      $fname = $request->input('fname');
      $lname = $request->input('lname');
      $email = $request->input('email');
      $phone = $request->input('phone');
      $comment = $request->input('comment');

      $data = array(
        'company_name'=>$company_name,
        'fname'=>$fname,
        'lname'=>$lname,
        'email'=>$email,
        'phone'=>$phone,
        'comment'=>$comment,
      );

      // Path or name to the blade template to be rendered
      $template_path = 'mail_template.inquiry';

      Mail::send($template_path, $data, function($message) {
          // Set the receiver and subject of the mail.
          $message->to('dzk.prvt@gmail.com', 'Coasters')->subject('Coasters Inquiry');
          // Set the sender
          $message->from('dizeke.skye03@gmail.com','Coasters.ph');
      });

      //If some error occurs
      if(count(Mail::failures()) > 0){
        return redirect('/contact-us/failed');
      } else{
        return redirect('/contact-us/sent');
      }
    }
}
