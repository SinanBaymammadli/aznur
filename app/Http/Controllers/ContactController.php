<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
  public function index()
  {
      return view('contact');
  }

  public function sendEmail(Request $request)
  {
      $this->validate($request, [
          'email' => 'required|email',
          'name' => 'required',
          'message' => 'required'
      ]);

      $data = [
          'email' => $request->email,
          'name' => $request->name,
          'messageBody' => $request->message
      ];

      Mail::send('emails.contact', $data, function($message) use ($data){
          $message->from($data['email']);
          $message->to('sinan.baymammadli@gmail.com');
          $message->subject('Email from aznurkabel.com');
      });

      //Session::flash('success', 'Got your message, will be answering soon!');

      return redirect('/contact');
  }
}
