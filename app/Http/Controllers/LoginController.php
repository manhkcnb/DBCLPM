<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\OkpassNewRequest;
use App\Http\Requests\PasswordNewRequest;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class LoginController extends Controller
{
    public function login()
    {
        return view('login.form_login');
    }
    public function loginPost(LoginRequest $request)
    {

        $email = Request('email');
        $password = Request('password');

        $user = Users::where("email", $email)->first();
        if ($user && Hash::check($password, $user->password)) {
            return redirect()->route('monhoc');
        } else {
            return Redirect('/login')->with('notify', 'invalid');
        }
    }
    public function logout()
    {
        return view('login.form_login');
    }
    public function quenmk()
    {
        return view('login.forgotpassword');
    }
    public function forgotpass(ForgotRequest $request)
    {

        $email = $request->input("email");
        $user = Users::where("email", $email)->first();
        $check = 'false';
        if ($user) {
            $recoveryCode = Str::random(6);

            Users::where("email", $email)->update(["recovery_code" => $recoveryCode]);
            $subject = 'Password recovery';
            $message = 'Your account recovery code is:
        	' . $recoveryCode;
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->IsHTML(true);
                $mail->CharSet = 'UTF-8';
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'manhkcnb35@gmail.com';
                $mail->Password = 'nnnqtkluawdgeuzo';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->setFrom('manhkcnb35@gmail.com', 'User');
                $mail->addAddress($email);
                $mail->Subject = $subject;
                $mail->msgHTML($message);
                $mail->send();

                $check = 'true';
            } catch (Exception $e) {

                $check = 'false';
            }
        }




        if ($check == 'true') {
            session(['email' => $email]);
            return redirect()->route('getpass');
        } else {
            return redirect()->route('quenmk')->with('notify', 'invalid');
        }
    }
    public function getpass(){
        $email =session('email');
        return view("login.resetpass", ['email' => $email]);
    }
    public function passwordnew(PasswordNewRequest $request)
    {
        $email = $request->input('email');
        $code = $request->input('code');
       
        $user = Users::where('email', $email)->first();
        if ($user->recovery_code == $code) {

            return redirect()->route('ok');
        } else {
           
            return view('login.resetpass', ['email' => $email, 'notify' => 'invalid']);
        }

    }
    public function ok (){
        $email =session('email');
        return view("login.password_new", ['email' => $email]);

    }
    public function okpass(OkpassNewRequest $request){
        $email = $request->input('email');
        $pass = $request->input('password');
        $user = Users::where('email', $email)->first();
        if(Hash::check($pass, $user->password) ){
            return view('login.password_new', ['email' => $email, 'notify' => 'invalid']);
        }else{
            Users::where('email', $email)->update(['password'=> Hash::make($pass)]);
            session()->forget('email');
             return $this->login();
        }

    }
}
