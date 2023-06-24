<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
class SendMailController extends Controller
{
    public function send(Request $request){
        $mail = new PHPMailer(true);
        $mail->CharSet = "UTF-8";
        if($request['name'] != "" && $request['name'] != NULL && $request['email'] != "" && $request['email'] != NULL && $request['content'] != "" && $request['content'] != NULL){
            try{
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'cy9577@gmail.com';
                $mail->Password = 'grqrdvmjhszzvafa';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
      
                $mail->setFrom('cy9577@gmail.com');
      
                $mail->addAddress('cy9577@gmail.com');
      
                $mail->isHTML(true);
                $mail->Subject = "個人網站寄件";
                $mail->Body .= '寄信人姓名:' . $request['name'] .'<br />';
                $mail->Body .= '寄信人Email:' . $request['email'] .'<br />';
                $mail->Body .= '內容:<br />' . $request['content'];
                $mail->send();
            }catch (Exception $e) {
                Log::info("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
                session()->flash('error', "Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
       
    }
}
