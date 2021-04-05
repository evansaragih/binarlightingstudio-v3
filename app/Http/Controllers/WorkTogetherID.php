<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class WorkTogetherID extends Controller
{

    function sendMail(Request $request)
    {
        $subject = "Work Together Notification from  " . $request->input('fname');
        $emailAddress = $request->input('email');

        if ($emailAddress != "") {
            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                // Pengaturan Server
                // $mail->SMTPDebug = 2;                              // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'mail.binarlightingstudio.com';         // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'no-reply@binarlightingstudio.com'; // SMTP username
                $mail->Password = 'subscribebinar';                   // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to

                // Siapa yang mengirim email
                $mail->setFrom("no-reply@binarlightingstudio.com", "Work-together BINAR Email");

                // Siapa yang akan menerima email
                $mail->addAddress('no-reply@binarlightingstudio.com', 'BINAR a Lighting Studio');
                $mail->addReplyTo($emailAddress);


                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = "Pesan ini dikirimkan melalui halaman Mari Kerjasama (Indonesian Page)
                <br/>Nama : <b>" . $request->input('fname') . " " . $request->input('lname') . "</b>
                <br/>Alamat Email: <b>" . $request->input('email') . "</b>
                <br/>Perusahaan: <b>" . $request->input('company') . "</b>
                <br/>Website: <b>" . $request->input('website') . "</b>
                <br/>Lokasi: <b>" . $request->input('location') . "</b>
                <br/>Pesan: <br/><textarea rows='50' cols='100'>" . $request->input('message');
                // $mail->AltBody = $message;

                $mail->send();

                toastr()->success('Terimakasih, kami telah menerima email Anda. Mohon tunggu balasan kami lewat email Anda');

                return view('id/work-together');
            } catch (Exception $e) {
                toastr()->error('Sorry, There are something problem');
                return view('id/homepage');
                // echo 'Message could not be sent.';
                // echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
        } else {
            toastr()->warning('Failed', 'Please fill out required fields');
            return view('id/work-together');
        }
    }
}
