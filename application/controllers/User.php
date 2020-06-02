<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $role = $this->session->userdata('role');
        if ($role != 'admin') {
            redirect(base_url('/'));
            return;
        }
    }


    public function index($page = null)
    {
        $data['title']        = 'Admin: Pengguna';
        $data['content']    = $this->user->paginate($page)->get();
        $data['total_rows']    = $this->user->count();
        $data['pagination']    = $this->user->makePagination(
            base_url('user'),
            2,
            $data['total_rows']
        );
        $data['page']        = 'pages/user/index';

        $this->view($data);
    }
}
