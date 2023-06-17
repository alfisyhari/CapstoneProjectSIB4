<?php
class M_table extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function dataTableNotWhere($tabel, $kondisi, $id)
    {
        return $this->db->query("SELECT * FROM `$tabel` where $kondisi != $id ")->result_array();
    }
    public function updateTable($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }
    public function createTable($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    public function deleteTable($table, $id)
    {
        $this->db->delete($table, ["id" => $id]);
    }
}