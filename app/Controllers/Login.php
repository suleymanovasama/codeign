<?php

namespace App\Controllers;
use \App\Models\User;

class Login extends BaseController
{
    public function index(): string
    {    
        echo view('common/header');
        return view('login');
        echo view('common/footer');
    }
    public function dologin()
    {
        $userModel = new User();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $user = $userModel->where('email', $email)->first();

    
        if ($user) {
       
            if (password_verify($password, $user['password'])) {
            
                $this->session->set("user", $user);
                return redirect()->to('/dashboard');
            } else {
               
                echo "Wrong password";
            }
        } else {
          
            echo "User not found";
        }
    }
    
    public function logout(){
session_destroy();
return view('login');
    }
     

       
}
