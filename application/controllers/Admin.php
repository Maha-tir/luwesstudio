<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        redirect("admin/dashboard");
    }

    public function dashboard()
    {
        $data = [
            "title" => "LuwessStudio Dashboard Admin",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
        ];
        $this->load->view("templates/head/head", $data);
        $this->load->view("templates/body/body", $data);
        $this->load->view("templates/footer/footer");
    }
}
