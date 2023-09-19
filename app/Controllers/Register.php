<?php

namespace App\Controllers;
use \App\Models\User;

class Register extends BaseController
{
    public function index()
    {    
        echo view('common/header');
        return view('register');
        echo view('common/footer');
    }
 

    public function doregister()
    {
        $model = new User();
        
      
        $validationRules = [
            'name' => 'required|min_length[3]|max_length[50]',
            'surname' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email',
            'birth_day' => 'permit_empty|valid_date',
            'password' => 'required|min_length[8]'
        ];

        if (!$this->validate($validationRules)) {
           
            return view('register', [
                'validation' => $this->validator,
            ]);
        } else {
         
            $name = $this->request->getPost('name');
            $surname = $this->request->getPost('surname');
            $email = $this->request->getPost('email');
            $brithday = $this->request->getPost('birth_day');
            $password = $this->request->getPost('password');

            $data = [
                'name' => $name,
                'surname' => $surname,
                'password' => password_hash($password, PASSWORD_BCRYPT),
                'email' => $email,
                'birth_day' => $brithday
            ];


            $result = $model->insert($data);

            if ($result) {
                echo "Qeydiyyat uğurla tamamlanmışdır.";
            } else {
                echo "Veritabanına kayıt sırasında bir hata oluştu, lütfen yeniden deneyin.";
            }
        }
    }

}
