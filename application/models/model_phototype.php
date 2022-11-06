<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Model_Phototype extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select("*");
        $this->db->from("photo_type");
        $this->db->order_by("id");
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert("photo_type", $data);
    }

    public function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
