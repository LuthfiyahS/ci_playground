<?php namespace App\Controllers;
use App\Models\UsersModel;
class Login extends BaseController
{
	public function index()
	{
		echo view('login');
	}
	public function auth(){
	    $session = session();
        $model = new UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id'],
                    'username'     => $data['username'],
                    'name'     => $data['name'],
                    'email'    => $data['email'],
                ];
                $session->set($ses_data);
                return redirect()->to('/');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
	}
	public function logout(){
		session()->remove('username');

        //or
        //session()->destroy();

		return redirect()->to('/login');
	}
}