<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mlogin;

class LoginController extends BaseController
{
    public function index()
    {
        $session = session();

        if ($session->has("user_id")) {
            return redirect()->to(base_url("index"));
        } else {
            return view('login');
        }
    }

    public function login()
    {
        $modelLogin = new Mlogin();

        $username = trim($this->request->getPost('username'));
        $passwordInput = trim($this->request->getPost('password'));

        if (!$username || !$passwordInput) {
            return redirect()->to(base_url('/'))->withInput()->with('error', 'Username or password is missing.');
        }

        $cekUsername = $modelLogin->checking_username($username);

        // print_r($cekUsername);
        // die();

        if (count($cekUsername) > 0) {
            $password = $cekUsername[0]["user_password"];

            // print_r($password);
            // die();

            if (password_verify($passwordInput, $password)) {
                $user_id = $cekUsername[0]["user_id"];

                // print_r($user_id);
                // die();

                $checkUser = $modelLogin->checking_user($username, $password);

                // print_r($checkUser);
                // die();

                if ($checkUser['status']) {
                    session()->set('user_id', $user_id);

                    return redirect()->to(base_url('index'))->withInput()->with('sucess', 'Login successful!');
                } else {
                    return redirect()->to(base_url('/'))->withInput()->with('error', 'Your account is non active !');
                }
            } else {
                return redirect()->to(base_url('/'))->withInput()->with('error', 'Login failed, please check username or password !');
            }
        } else {
            return redirect()->to(base_url('/'))->withInput()->with('error', 'Username not found!');
        }
    }

    public function logout()
    {
        session()->remove('user_id');

        return redirect()->to(base_url('login'));
    }


    // public function register()
    // {
    //     $mlogin = new Mlogin();

    //     $username = 'new_user'; // Ganti dengan username baru
    //     $password_input = 'password123'; // Ganti dengan password baru
    //     $hashed_password = password_hash($password_input, PASSWORD_DEFAULT);

    //     $data = array_merge([
    //         'user_name' => $username,
    //         'user_password' => $hashed_password,
    //     ], $additional_data);

    //     $mlogin->add_user($data);

    //     echo "User $username has been registered successfully!";
    // }
}
