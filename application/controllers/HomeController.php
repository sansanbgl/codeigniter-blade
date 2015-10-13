<?php
/**
 * Home Controller (Dashboard)
 */
class HomeController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login');
    }
    public function index()
    {
        $data['a'] = 'aku';
        return $this->blade->view()->make('pages/welcome', $data)->render();
    }
    public function login()
    {
        if (!$this->input->post()) {
            return $this->blade->load->view('pages/home/login')->render();
        } else {
            $login_data = [
                'nama_id'  => $this->input->post('nama_id'),
                'password' => $this->input->post('password'),
            ];

            $login        = $this->login->login($login_data);
            $session_data = array(
                'is_login' => true,
                'nama_id'  => $this->input->post('nama_id'),

            );
            $this->session->userdata('');
        }
    }
}
