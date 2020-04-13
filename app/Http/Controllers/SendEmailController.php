<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\User;
use App\Http\Controllers\Controller;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use App;
use PDF;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Job;
use App\Inv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Log;

class SendEmailController extends Controller
{
  public function send(Request $request)
  {
    
    

    //$ids = explode(",", $request['ids']);
    $user = auth()->user();

    Log::debug($user->email);



      //$email = "wangbang24139212@gmail.com";

/*      $mail = new PHPMailer(true); // notice the \  you have to use root namespace here
      $mail->isSMTP(); // tell to use smtp
      $mail->CharSet = "utf-8"; // set charset to utf8
      $mail->SMTPAuth = true;  // use smpt auth
      $mail->SMTPSecure = "ssl"; // or ssl
      $mail->Host       = "smtp.googlemail.com";
      $mail->Port       = 465; // most likely something different for you. This is the mailtrap.io port i use for testing.
      $mail->Username   = "jinsheng1910@gmail.com";
      $mail->Password   = "Js20191010!";
      $mail->setFrom("jinsheng1910@gmail.com");
      $mail->Subject = "Hello!";
      $mail->MsgHTML("This is a Invoice PDF");
      $mail->addAddress($email);

      if ($mail->Send()) {
        $this->statusdesc  =   "Message sent Succesfully";
        $this->statuscode  =   "1";
      } else {
        $this->statusdesc  =   "Error sending mail";
        $this->statuscode  =   "0";
      }
      return response()->json(compact('this'));*/
      
      Mail::to($user->email)->send(new SendMail($user->name));

      
  }




}
