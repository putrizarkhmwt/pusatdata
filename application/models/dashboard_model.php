<?php
require_once 'basemodel.php';

class Dashboard_Model extends BaseModel{
    public function __construct(){
        parent::__construct($this);
    }
    public function showU(){
    $query = $this->db->query('SELECT * FROM tbl_users');
    return $query->result_array();
    }
    public function countRowU(){
    $query = $this->db->query('SELECT * FROM tbl_users');
    return $query->num_rows();
    }
    public function showC(){
    $query = $this->db->query('SELECT * FROM calon');
    return $query->result_array();
    }
    public function countRowC(){
    $query = $this->db->query('SELECT * FROM calon');
    return $query->num_rows();
    }
    public function countRowV(){
    $query = $this->db->query('SELECT * FROM mbr2018');
    return $query->num_rows();
    }
    public function showV(){
    $query = $this->db->query('SELECT * FROM mbr2018');
    return $query->result_array();
    }
}
?>