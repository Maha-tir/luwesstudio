<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_backgroundcolor");
        $this->load->model("model_package");
        $this->load->model("model_phototype");
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

    // * All Admin Data Pages
    public function data_background_color()
    {
        $this->form_validation->set_rules("name", "Background Color", "required|trim", [
            "required" => "You have to fill in the name of the background color",
            // ? "is_unique" => "Background color name is already exists",
        ]);
        $this->form_validation->set_rules("status", "Status", "required|trim", [
            "required" => "You must fill in the availability of this status",
        ]);
        $data = [
            "title" => " Data Background Color Admin",
            "header_name" => "Background Color",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
            "background_color" => $this->model_backgroundcolor->get_all_data(),
        ];
        if ($this->form_validation->run() == false) {
            $this->load->view("templates/head/head", $data);
            $this->load->view("templates/body/body", $data);
            $this->load->view("templates/navbar/d_header", $data);
            $this->load->view("data/background-color", $data);
            $this->load->view("templates/footer/footer");
        } else {
            $data = [
                "name" => ucwords(htmlspecialchars($this->input->post("name", true))),
                "status" => htmlspecialchars($this->input->post("status", true)),
            ];
            $this->model_backgroundcolor->add($data);
            $this->session->set_flashdata("bg-success", "<div class='flashdata-success' data-flashdata='Background color data added successfully'></div>");
            redirect("admin/data_background_color");
        }
    }

    public function data_package()
    {
        $this->form_validation->set_rules("name", "Package", "required|trim", [
            "required" => "You have to fill in the name of the package",
            // ? "is_unique" => "Package name is already exists",
        ]);
        $this->form_validation->set_rules("max_person", "Max Person", "required|trim", [
            "required" => "You have to fill in the maximum number of packages",
        ]);
        $data = [
            "title" => " Data Package Admin",
            "header_name" => "Package",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
            "package" => $this->model_package->get_all_data(),
        ];
        if ($this->form_validation->run() == false) {
            $this->load->view("templates/head/head", $data);
            $this->load->view("templates/body/body", $data);
            $this->load->view("templates/navbar/d_header", $data);
            $this->load->view("data/package", $data);
            $this->load->view("templates/footer/footer");
        } else {
            $data = [
                "name" => ucwords(htmlspecialchars($this->input->post("name", true))),
                "max_person" => htmlspecialchars($this->input->post("max_person", true)),
            ];
            $this->model_package->add($data);
            $this->session->set_flashdata("pc-success", "<div class='flashdata-success' data-flashdata='Package data added successfully'></div>");
            redirect("admin/data_package");
        }
    }

    public function data_photo_type()
    {
        $this->form_validation->set_rules("name", "Photo Type", "required|trim", [
            "required" => "You have to fill in the name of the photo type",
            "is_unique" => "Photo Type name is already exists",
        ]);
        $this->form_validation->set_rules("status", "Status", "required|trim", [
            "required" => "You must fill in the availability of this status",
        ]);
        $data = [
            "title" => " Data Photo Type Admin",
            "header_name" => "Photo Type",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
            "photo_type" => $this->model_phototype->get_all_data(),
        ];
        if ($this->form_validation->run() == false) {
            $this->load->view("templates/head/head", $data);
            $this->load->view("templates/body/body", $data);
            $this->load->view("templates/navbar/d_header", $data);
            $this->load->view("data/photo-type", $data);
            $this->load->view("templates/footer/footer");
        } else {
            $data = [
                "name" => ucwords(htmlspecialchars($this->input->post("name", true))),
                "status" => htmlspecialchars($this->input->post("status", true)),
            ];
            $this->model_phototype->add($data);
            $this->session->set_flashdata("pt-success", "<div class='flashdata-success' data-flashdata='Photo Type data added successfully'></div>");
            redirect("admin/data_photo_type");
        }
    }

    public function profile()
    {
        $data = [
            "title" => " Luwesstudio Admin Profile",
            "header_name" => "My Profile",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
        ];
        $this->load->view("templates/head/head", $data);
        $this->load->view("templates/body/body", $data);
        $this->load->view("templates/navbar/d_header", $data);
        $this->load->view("admin/profile", $data);
        $this->load->view("templates/footer/footer");
    }

    public function edit_profile()
    {
        $this->form_validation->set_rules("full_name", "Full Name", "required|trim", [
            "required" => "You haven't filled in your full name",
        ]);
        $this->form_validation->set_rules("username", "Username", "required|trim", [
            "required" => "You haven't filled in your username",
            // "is_unique" => "Username is already used",
        ]);
        $data = [
            "title" => " Luwesstudio Admin Edit Profile",
            "header_name" => "Edit Profile",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
        ];
        if ($this->form_validation->run() == false) {
            $this->load->view("templates/head/head", $data);
            $this->load->view("templates/body/body", $data);
            $this->load->view("templates/navbar/d_header", $data);
            $this->load->view("admin/edit-profile", $data);
            $this->load->view("templates/footer/footer");
        } else {
            $fullName = $this->input->post("full_name");
            $username = $this->input->post("username");
            $email = $this->input->post("email");
            $upload_image = $_FILES['image'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '3048';
                if ($data["admin"]["gender"] == "male") {
                    $config['upload_path'] = './assets/img/avatar/male/';
                } else {
                    $config['upload_path'] = './assets/img/avatar/female/';
                }

                $this->load->library('upload', $config);

                if ($this->upload->do_upload("image")) {
                    $old_image = $data["admin"]["image"];
                    if ($old_image != "default.jpg") {
                        if ($data["admin"]["gender"] == "male") {
                            unlink(FCPATH . "assets/img/avatar/male/" . $old_image);
                        } else {
                            unlink(FCPATH . "assets/img/avatar/female/" . $old_image);
                        }
                    }
                    $new_image = $this->upload->data("file_name");
                    $this->db->set("image", $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set("full_name", $fullName);
            $this->db->set("username", $username);
            $this->db->where("email", $email);
            $this->db->update("admin");
            $this->session->set_flashdata("profile-message", "<div class='flashdata-success' data-flashdata='Your profile has been changed'></div>");
            redirect("admin/profile");
        }
    }

    public function change_password()
    {
        $this->form_validation->set_rules("current_password", "Current Password", "required|trim", [
            "required" => "You haven't filled in your current password",
        ]);
        $this->form_validation->set_rules("new_password", "New Password", "required|trim|min_length[8]|matches[confirm_password]", [
            "required" => "You haven't filled in your current password",
            "min_length" => "Password is too short, password minimum 8 characters",
            "matches" => "The new password is not the same as the confirmation password",
        ]);
        $this->form_validation->set_rules("confirm_password", "Confirm Password", "required|trim|min_length[8]|matches[new_password]", [
            "required" => "You haven't filled in your current password",
            "min_length" => "Password is too short, password minimum 8 characters",
            "matches" => "Confirm password is not the same as new password",
        ]);

        $data = [
            "title" => "Luwesstudio Change Password Admin",
            "header_name" => "Change Password",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
        ];
        if ($this->form_validation->run() == false) {
            $this->load->view("templates/head/head", $data);
            $this->load->view("templates/body/body", $data);
            $this->load->view("templates/navbar/d_header", $data);
            $this->load->view("admin/change-password", $data);
            $this->load->view("templates/footer/footer");
        } else {
            $current_password = $this->input->post("current_password", true);
            $new_password = $this->input->post("new_password", true);
            if (!password_verify($current_password, $data["admin"]["password"])) {
                $this->session->set_flashdata("error-message", "<div class='flashdata-error' data-flashdata='Current password is incorrect'></div>");
                redirect("admin/change_password");
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata("error-message", "New password cannot be the same as the current password");
                    redirect("admin/change_password");
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set("password", $password_hash);
                    $this->db->where("email", $this->session->userdata("email"));
                    $this->db->update("admin");
                    $this->session->set_flashdata("profile-message", "<div class='flashdata-success' data-flashdata='Your password has been changed'></div>");
                    redirect("admin/profile");
                }
            }
        }
    }
}
