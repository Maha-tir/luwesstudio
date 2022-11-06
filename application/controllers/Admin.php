<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        redirect("admin/dashboard");
    }

    public function dashboard()
    {
        $data = [
            "title" => "LuwessStudio Admin Dashboard",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
        ];
        $this->load->view("templates/head/head", $data);
        $this->load->view("templates/body/body", $data);
        $this->load->view("templates/navbar/header", $data);
        $this->load->view("templates/navbar/bottom", $data);
        $this->load->view("admin/dashboard", $data);
        $this->load->view("templates/footer/footer");
    }

    public function customer()
    {
        $data = [
            "title" => "Admin Data Customer",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
        ];
        $this->load->view("templates/head/head", $data);
        $this->load->view("templates/body/body", $data);
        $this->load->view("templates/navbar/header", $data);
        $this->load->view("templates/navbar/bottom", $data);
        $this->load->view("admin/customer", $data);
        $this->load->view("templates/footer/footer");
    }

    public function request_booking()
    {
        $data = [
            "title" => "Admin Data Request Booking",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
        ];
        $this->load->view("templates/head/head", $data);
        $this->load->view("templates/body/body", $data);
        $this->load->view("templates/navbar/header", $data);
        $this->load->view("templates/navbar/bottom", $data);
        $this->load->view("admin/request-booking", $data);
        $this->load->view("templates/footer/footer");
    }

    public function store()
    {
        $data = [
            "title" => "LuwessStudio Admin Store",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
        ];
        $this->load->view("templates/head/head", $data);
        $this->load->view("templates/body/body", $data);
        $this->load->view("templates/navbar/header", $data);
        $this->load->view("templates/navbar/bottom", $data);
        $this->load->view("admin/store", $data);
        $this->load->view("templates/footer/footer");
    }
}
