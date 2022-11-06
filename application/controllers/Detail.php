<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_backgroundcolor");
        $this->load->model("model_package");
        $this->load->model("model_phototype");
        is_logged_in();
    }

    public function customer()
    {
        $data = [
            "title" => "Luwesstudio Admin Detail Customer",
            "header_name" => "Detail Customer",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
        ];
        $this->load->view("templates/head/head", $data);
        $this->load->view("templates/body/body", $data);
        $this->load->view("templates/navbar/d_header", $data);
        $this->load->view("detail/customer", $data);
        $this->load->view("templates/footer/footer");
    }

    public function request_booking()
    {
        $data = [
            "title" => "Luwesstudio Admin Detail Customer",
            "header_name" => "Detail Customer",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
        ];
        $this->load->view("templates/head/head", $data);
        $this->load->view("templates/body/body", $data);
        $this->load->view("templates/navbar/d_header", $data);
        $this->load->view("detail/request-booking", $data);
        $this->load->view("templates/footer/footer");
    }

    public function background_color($id)
    {
        $this->form_validation->set_rules("background_color", "Background Color", "required|trim", [
            "required" => "You haven't filled in your background color name",
        ]);
        $this->form_validation->set_rules("status", "Status", "required|trim", [
            "required" => "You must fill in the availability of this status",
        ]);

        $where = ["id" => $id];
        $data = [
            "title" => "Admin Edit Background Color",
            "header_name" => "Edit Background Color",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
            "background_color" => $this->model_backgroundcolor->edit($where, "background_color")->result()
        ];
        if ($this->form_validation->run() == false) {
            $this->load->view("templates/head/head", $data);
            $this->load->view("templates/body/body", $data);
            $this->load->view("templates/navbar/d_header", $data);
            $this->load->view("detail/background-color", $data);
            $this->load->view("templates/footer/footer");
        } else {
            $name = $this->input->post("background_color");
            $status = $this->input->post("status");
            $data = [
                "name" => ucwords($name),
                "status" => $status
            ];
            $this->model_backgroundcolor->update($where, $data, "background_color");
            $this->session->set_flashdata("bg-success", "<div class='flashdata-success' data-flashdata='Background color edited successfully'></div>");
            redirect("admin/data_background_color");
        }
    }

    public function package($id)
    {
        $this->form_validation->set_rules("package", "Package", "required|trim", [
            "required" => "You haven't filled in your package name",
        ]);
        $this->form_validation->set_rules("max_person", "Max Person", "required|trim", [
            "required" => "You have to fill in the maximum number of packages",
        ]);
        $where = ["id" => $id];
        $data = [
            "title" => "Admin Edit Package",
            "header_name" => "Edit Package",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
            "package" => $this->model_package->edit($where, "package")->result()
        ];
        if ($this->form_validation->run() == false) {
            $this->load->view("templates/head/head", $data);
            $this->load->view("templates/body/body", $data);
            $this->load->view("templates/navbar/d_header", $data);
            $this->load->view("detail/package", $data);
            $this->load->view("templates/footer/footer");
        } else {
            $name = $this->input->post("package");
            $max_person = $this->input->post("max_person");
            $data = [
                "name" => ucwords($name),
                "max_person" => $max_person
            ];
            $this->model_package->update($where, $data, "package");
            $this->session->set_flashdata("pc-success", "<div class='flashdata-success' data-flashdata='Package edited successfully'></div>");
            redirect("admin/data_package");
        }
    }

    public function photo_type($id)
    {
        $this->form_validation->set_rules("photo_type", "Photo Type", "required|trim", [
            "required" => "You have to fill in the name of the photo type",
        ]);
        $this->form_validation->set_rules("status", "Status", "required|trim", [
            "required" => "You must fill in the availability of this status",
        ]);
        $where = ["id" => $id];
        $data = [
            "title" => "Edit Background Color",
            "header_name" => "Edit Background Color",
            "admin" => $this->db->get_where("admin", ["email" => $this->session->userdata("email")])->row_array(),
            "photo_type" => $this->model_phototype->edit($where, "photo_type")->result(),
        ];
        if ($this->form_validation->run() == false) {
            $this->load->view("templates/head/head", $data);
            $this->load->view("templates/body/body", $data);
            $this->load->view("templates/navbar/d_header", $data);
            $this->load->view("detail/photo-type", $data);
            $this->load->view("templates/footer/footer");
        } else {
            $name = $this->input->post("photo_type");
            $status = $this->input->post("status");
            $data = [
                "name" => ucwords($name),
                "status" => $status
            ];
            $this->model_backgroundcolor->update($where, $data, "photo_type");
            $this->session->set_flashdata("pt-success", "<div class='flashdata-success' data-flashdata='Photo Type edited successfully'></div>");
            redirect("admin/data_photo_type");
        }
    }

    public function delete_background_color($id)
    {
        $where = ["id" => $id];
        $this->model_backgroundcolor->delete($where, "background_color");
        $this->session->set_flashdata("bg-success", "<div class='flashdata-success' data-flashdata='Data background color successfully deleted'></div>");
        redirect("admin/data_background_color");
    }

    public function delete_package($id)
    {
        $where = ["id" => $id];
        $this->model_package->delete($where, "package");
        $this->session->set_flashdata("pc-success", "<div class='flashdata-success' data-flashdata='Data package successfully deleted'></div>");
        redirect("admin/data_package");
    }

    public function delete_photo_type($id)
    {
        $where = ["id" => $id];
        $this->model_phototype->delete($where, "photo_type");
        $this->session->set_flashdata("pt-success", "<div class='flashdata-success' data-flashdata='Data photo type successfully deleted'></div>");
        redirect("admin/data_photo_type");
    }
}
