<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Libraries\Hash;

class AuthController extends BaseController
{
    protected $helpers = ['url', 'form'];

    public function login() /**------- USER LOGIN FORM --------*/
    {
        return view('layout/loginpage');
    }

    public function register() /**------- USER REGISTER FORM --------*/
    {
        return view('layout/registerpage');
    }

    public function create() /**------- REGISTRATION OF USER FORM AND CREATE METHOD FOR CRUD --------*/
    {
        $validation = $this->validate([
            'firstname' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Firstname is required.',
                ],
            ],
            'lastname' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Lastname is required.',
                ],
            ],
            'age' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Age is required.',
                ],
            ],
            'address' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Address is required.',
                ],
            ],
            'contact' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Contact number is required.',
                ],
            ],
            'username' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Username is required.',
                ],
            ],
            'email' => [
                'rules'  => 'required|valid_email|is_unique[register.email]',
                'errors' => [
                    'required' => 'Email is required.',
                    'valid_email' => 'Please check the Email field. It does not appear to be valid.',
                    'is_unique' => 'Email already taken.',
                ],
            ],
            'password' => [
                'rules'  => 'required|min_length[5]|max_length[20]',
                'errors' => [
                    'required' => 'Password is required.',
                    'min_length' => 'Password must have atleast 5 characters in length.',
                    'max_length' => 'Password must not have characters more thant 20 in length.',
                ],
            ],
            'confirmpassword' => [
                'rules'  => 'matches[password]',
                'errors' => [
                    'required' => 'Confirm password is required.',
                    'min_length' => 'Confirm password must have atleast 5 characters in length.',
                    'max_length' => 'Confirm Password must not have characters more thant 20 in length.',
                    'matches' => 'Confirm Password must matches to password.',
                ],
            ],
        ]);

        if(!$validation){ 
           // return view('layout/register',['validation'=>$this->validator]);
           return  redirect()->to('register')->with('validation', $this->validator)->withInput();
        }else{
            $firstname = $this->request->getPost('firstname');
            $lastname = $this->request->getPost('lastname');
            $age = $this->request->getPost('age');
            $address = $this->request->getPost('address');
            $contact = $this->request->getPost('contact');
            $email = $this->request->getPost('email');
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $confirmpassword = $this->request->getPost('confirmpassword');

            $data = [
                'firstname'=>$firstname,
                'lastname'=>$lastname,
                'age'=>$age,
                'address'=>$address,
               'contact'=>$contact,
               'username'=>$username,
               'email'=>$email,
               'password'=>Hash::make($password)
            ];

            $userModel = new UserModel();
            $query = $userModel->insert($data);
            if( !$query ){
                 return  redirect()->to('register')->with('fail', 'Something went wrong.');
            }else{
                  return  redirect()->to('register')->with('success', 'You are now successfully registered.');
            }
        }
    }


    public function check() /**------- LOGIN VALIDATION FOR LOGIN FORM --------*/
    {

        $validation = $this->validate([
            'email' => [
                'rules'  => 'required|valid_email|is_not_unique[register.email]',
                'errors' => [
                    'required' => 'Email is required.',
                    'valid_email' => 'Please check the Email field. It does not appear to be valid.',
                    'is_not_unique' => 'Email not registered in our server.',
                ]
            ],
            'password' => [
                'rules'  => 'required|min_length[5]|max_length[20]',
                'errors' => [
                    'required' => 'Password is required.',
                    'min_length' => 'Password must have atleast 5 characters in length.',
                    ]
            ],
        ]);

        if(!$validation){
           // return view('layout/loginpage',['validation'=>$this->validator]);
           return  redirect()->to('login')->with('validation', $this->validator)->withInput();
        }else{

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $userModel = new UserModel();
            $user_info = $userModel->where('email', $email)->first();
            $check_password = Hash::check($password, $user_info['password']);
      
            if(!$check_password)
            {
                session()->setFlashdata('fail', 'Incorrect password');
                return redirect()->to('login')->withInput();
            }
            else
            {
                $user_id = $user_info['id'];
                session()->set('LoggedUser', $user_id);
                return  redirect()->to('products');
            }
        }
    }
}