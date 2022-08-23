<?php
/**
 * Created by PhpStorm.
 * User: amirbayan
 * Date: 8/22/22
 * Time: 10:22 PM
 */

namespace App\Controllers;


class SigninController extends BaseController

{

    public function index()
    {
        helper(['form']);
        echo view('signin');
    }

    public function loginAuth()
    {
        $session = session();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');


        if ($email == "admin@test.com" && $password == "P@ssw0rd") {
            $ses_data = [
                'id' => '1',
                'name' => 'admin',
                'email' => 'admin@test.com',
                'isLoggedIn' => TRUE
            ];
            $session->set($ses_data);
            return redirect()->to('/');

        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/signin');
    }
}