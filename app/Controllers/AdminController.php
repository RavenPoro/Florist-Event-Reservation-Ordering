<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\UserModel;
use App\Models\BookingModel;

class AdminController extends BaseController
{
    protected $helpers = ['url', 'form'];

    public function dashboard() /**------- METHOD OF DASHBOARD --------*/
    {
        $register = new UserModel(); 
        $data['register'] = $register->findAll();
        return view('admin_dashboard/dashboard', $data);
        
    }

    public function total()
    {
        $booking = new BookingModel();
        $booking->where('status', 'Finished');
        echo $data['count']=$booking->countAllResults();
    }

    public function pos()
    {
        return view('admin_dashboard/pos');
    }
    public function order_list()
    {
        return view('admin_dashboard/order_list');
    }

    public function sales_report()
    {
        return view('admin_dashboard/sales_report');
    }

    public function delivery_list()
    {
        return view('admin_dashboard/delivery_list');
    }

    public function edit($id) /**------- EDIT METHOD --------*/
    {
        $register = new UserModel();
        $data['register'] = $register->find($id);
        return view('admin_dashboard/edit', $data);
    }

    public function update($id) /**------- UPDATE METHOD --------*/
    {
        $register = new UserModel();
        $data = [
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'age' => $this->request->getPost('age'),
            'address' => $this->request->getPost('address'),
            'contact' => $this->request->getPost('contact'),
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
        ];
        $register->update($id, $data);
        return  redirect()->to('users')->with('success', 'Updated Successfully.');
    }

    public function delete($id) /**------- DELETE METHOD --------*/
    {
        $register = new UserModel();
        $register->delete($id);
        return  redirect()->to('users')->with('success', 'Deleted Successfully.');
    }

    public function users() /**------- FETCH OR DISPLAY RECORD METHOD --------*/
    {
        $registered = new UserModel();
        $data['register'] = $registered->findAll();
        return view('admin_dashboard/users', $data);
    }

    public function admin() /**------- ADMIN LOGIN FORM --------*/
    {
        return view('admin_dashboard/admin');
    }

    public function adminlog() /**------- ADMIN LOGIN FORM --------*/
    {
        $validation = $this->validate([
            'username' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Username is required.',
                ]
            ],
            'password' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Password is required.',
                ]
            ],
        ]);

        if(!$validation){
            return view('admin_dashboard/admin',['validation'=>$this->validator]);
        }else{

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $adminModel = new AdminModel();
            $user_info = $adminModel->where('username', $username, 'password', $password);
      
            if ($user_info == true)
            {
                return redirect()->to('dashboard')->withInput();
            }
            else
            {
                return  redirect()->to('admin');
            }
        }
    }
}
