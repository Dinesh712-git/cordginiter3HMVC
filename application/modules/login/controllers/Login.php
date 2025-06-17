<?php

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel', 'loginMod'); //model

    }

    public function index()
    {

        // $meta['title'] = "Batches";
        $data['programs'] = $this->loginMod->get_details();

        // print_r($data);
        // die();
        $this->load->view("login/login", $data);
    }

    public function register()
    {
        $this->load->view("login/register");
    }

   public function save() {
    $username = $this->input->post('username');
    $email    = $this->input->post('email');
    $password = $this->input->post('password');
    $confirm  = $this->input->post('confirm_password');

    if ($password !== $confirm) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Passwords do not match.'
        ]);
        return;
    }

    // Optionally: validate email format or check for existing users

    $data = [
        'username' => $username,
        'email'    => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ];

    $res = $this->loginMod->register($data);

    if ($res) {
        echo json_encode([
            'status' => 'success',
            'message' => 'User registered successfully'
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Database error. Try again later.'
        ]);
    }
}

}


?>