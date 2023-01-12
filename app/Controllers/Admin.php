<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Admin_model;

class Admin extends BaseController
{
    public function signin()
    {
        helper(['form']);
        $data = [];
        if($this->request->getmethod()=='post')
        {
            $validation = [
                'email' => 'required|min_length[4]|max_length[50]|valid_email',
                'password' => 'required|min_length[5]|max_length[255]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password dont match'
                ]
            ];
            if(!$this->validate($validation, $errors))
            {
                $data['validation']=$this->validator;
            }else{
                $model = new Admin_model();

                $admin = $model->where('email', $this->request->getVar('email'))->first();
                if($this->verifyMypassword($this->request->getVar('password'), $admin['password']))
                {
                    $this->setUserSession($admin);
                    return redirect()->to('admindashboard');
                }else{
                    $data['Flash_message'] = true;
                }
            }
        }

        return view('admin_login/signin', $data);
    }
    public function signup()
    {
        helper('form');
        $data =[];
        if($this->request->getmethod()=='post')
        {
            // echo hello; exit;
            $validation = [
                'firstname' => 'required|min_length[2]|max_length[20]',
                'lastname' => 'required|min_length[2]|max_length[20]',
                'email' => 'required|min_length[4]|max_length[50]|valid_email|is_unique[admins.email]',
                'password' => 'required|min_length[5]|max_length[255]',
                'confirm_password' => 'matches[password]',
            ];
            if(!$this->validate($validation))
            {
                $data['validation']=$this->validator;
            }else{
                // echo hello;exit;
                $model = new Admin_model();
                $data = array(
                    'firstname' => $this->request->getVar('firstname'),
                    'lastname' => $this->request->getVar('lastname'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                );

                if($model->save($data))
                {
                    $data['Flash_message'] = true;
                }
            }
        }

        return view('admin_login/signup', $data);
    }

    private function setUserSession($admin)
    {
        $data = [
            'admin_id' => $admin['admin_id'],
            'firstname' => $admin['firstname'],
            'lastname' => $admin['lastname'],
            'email' => $admin['email'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }
    
    private function verifyMyPassword($enterpassword, $databasePassword)
    {   
        return password_verify($enterpassword, $databasePassword);
    }

    public function admindashboard()
    {
        $model = new Admin_model();
        $data['userdata'] = $model->findAll();
        // print_r($data);
        return view('dashboard/dashboard', $data);
    }

    public function edituser()
    {
        // $model = new Admin_model();

        // $data['userdata'] = $model->findAll();
        // print_r($data);
        return view('admin_login/edituser');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
