<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Contact extends Controller
{

    function sendMail(Request $request)
    {
        $subject = "Website Notification For Email Subscribe" . $request->input('email');
        $emailAddress = $request->input('email');

        if ($emailAddress != "") {
            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                // Pengaturan Server
                // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'mail.binarlightingstudio.com';                  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'no-reply@binarlightingstudio.com';                 // SMTP username
                $mail->Password = 'subscribebinar';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to

                // Siapa yang mengirim email
                $mail->setFrom("no-reply@binarlightingstudio.com", "BINAR Website Email");

                // Siapa yang akan menerima email
                $mail->addAddress('no-reply@binarlightingstudio.com', 'BINAR a Lighting Studio');     // Add a recipient
                // $mail->addAddress('ellen@example.com');               // Name is optional

                // ke siapa akan kita balas emailnya
                $mail->addReplyTo($emailAddress);

                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = "Email: " . $request->input('email');
                $mail->AltBody = 'Email Subscribe';

                $mail->send();

                toastr()->success('Thank You, we already added your email');

                return view('en/homepage');
            } catch (Exception $e) {
                toastr()->warning('Sorry, we cannot added you');
                return view('en/homepage');
                // echo 'Message could not be sent.';
                // echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
        } else {
            toastr()->error('Failed', 'Your Email Are Required');
            $progress = '27';
            return view('en/page/maintenance', ['progress' => $progress]);
        }
    }
}
