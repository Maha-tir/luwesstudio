<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        redirect("auth/login");
    }

    public function login()
    {
        if ($this->session->userdata("email")) {
            redirect("admin/dashboard");
        };

        $this->form_validation->set_rules("email", "Email", "required|trim|valid_email", [
            "required" => "You haven't filled in your email address",
            "valid_email" => "Oops.. Your email is invalid",
        ]);
        $this->form_validation->set_rules("password", "Password", "required|trim", [
            "required" => "You haven't filled in your password",
        ]);

        $data = [
            "title" => "Login account admin"
        ];
        if ($this->form_validation->run() == false) {
            $this->load->view("templates/head/head", $data);
            $this->load->view("templates/body/body", $data);
            $this->load->view("auth/login", $data);
            $this->load->view("templates/footer/footer");
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post("email");
        $password = $this->input->post("password");
        $admin = $this->db->get_where("admin", ["email" => $email])->row_array();

        if ($admin) {
            if ($admin["is_active"] == 1) {
                if (password_verify($password, $admin["password"])) {
                    $data = [
                        "is_active" => $admin["is_active"],
                        "date_created" => $admin["date_created"],
                        "email" => $admin["email"],
                    ];
                    $this->session->set_userdata($data);
                    redirect("admin/dashboard");
                } else {
                    $this->session->set_flashdata("message", "<div class='flashdata-error' data-flashdata='Wrong password!'></div>");
                    redirect("auth/login");
                }
            } else {
                $this->session->set_flashdata("message", "<div class='alert alert-danger alert-flex' role='alert'>
                <div class='icon'>
                  <ion-icon name='close-circle-outline'></ion-icon>
                </div>
                <span class='display'>
                    This email has not been activated
                </span>
                </div>");
                redirect("auth/login");
            }
        } else {
            $this->session->set_flashdata("message", "<div class='alert alert-danger alert-flex' role='alert'>
            <div class='icon'>
              <ion-icon name='close-circle-outline'></ion-icon>
            </div>
            <span class='display'>
                This email has not been registered. Please create your account
            </span>
            </div>");
            redirect("auth/login");
        }
    }


    public function register()
    {
        if ($this->session->userdata("email")) {
            redirect("admin/dashboard");
        };

        $this->form_validation->set_rules("full_name", "Full Name", "required|trim", [
            "required" => "You haven't filled in your full name",
        ]);
        $this->form_validation->set_rules("username", "Username", "required|trim", [
            "required" => "You haven't filled in your username",
            // "is_unique" => "Username already used",
        ]);
        $this->form_validation->set_rules("email", "Email", "required|trim|valid_email|is_unique[admin.email]", [
            "required" => "You haven't filled in your email address",
            "valid_email" => "Oops.. Your email is invalid",
            "is_unique" => "This email is already registered, please login",
        ]);
        $this->form_validation->set_rules("gender", "Gender", "required|trim", [
            "required" => "You haven't filled in your gender",
        ]);
        $this->form_validation->set_rules("password", "Password", "required|trim|min_length[8]", [
            "required" => "You haven't filled in your password",
            "min_length" => "Password is too short, password minimum 8 characters",
        ]);

        $data = [
            "title" => "Create account admin"
        ];
        if ($this->form_validation->run() == false) {
            $this->load->view("templates/head/head", $data);
            $this->load->view("templates/body/body", $data);
            $this->load->view("auth/register", $data);
            $this->load->view("templates/footer/footer");
        } else {
            $email = htmlspecialchars($this->input->post("email", true));
            $data = [
                "full_name" => htmlspecialchars($this->input->post("full_name", true)),
                "username" => htmlspecialchars($this->input->post("username", true)),
                "email" => $email,
                "password" => password_hash($this->input->post("password", true), PASSWORD_DEFAULT),
                "image" => "default.jpg",
                "gender" => strtolower(htmlspecialchars($this->input->post("gender", true))),
                "is_active" => 1,
                "date_created" => time()
            ];
            $token = base64_encode(random_bytes(36));
            $admin_token = [
                "email" => $email,
                "token" => $token,
                "date_created" => time(),
            ];
            $this->db->insert("admin", $data);
            $this->db->insert("admin_token", $admin_token);
            $this->session->set_flashdata("message", "<div class='swall-success' data-title='Account registration successful' data-text='You have successfully registered, please login to your account'></div>");
            redirect("auth/login");
        }
    }

    public function logout()
    {
        $this->session->unset_userdata("is_active");
        $this->session->unset_userdata("date_created");
        $this->session->unset_userdata("email");

        $this->session->set_flashdata("message", "<div class='flashdata-success' data-flashdata='You have successfully logged out'></div>");
        redirect("auth/login");
    }
}
