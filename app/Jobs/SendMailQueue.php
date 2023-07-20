<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
class SendMailQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $letter; 
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($letter)
    {
        $this->letter = $letter;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mail = new PHPMailer(true);
        $mail->CharSet = "UTF-8";
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
            $mail->Body .= '寄信人姓名:' . $this->letter['name'] .'<br />';
            $mail->Body .= '寄信人Email:' . $this->letter['email'] .'<br />';
            $mail->Body .= '內容:<br />' . $this->letter['content'];
            $mail->send();
        }catch (Exception $e) {
            Log::info("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
            session()->flash('error', "Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
