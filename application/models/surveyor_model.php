<?php
require_once 'basemodel.php';

class Surveyor_Model extends BaseModel{
    public function __construct(){
        parent::__construct($this);
    }
    public function showID($id){
        $query = $this->db->query('SELECT * FROM surveyor where id_surveyor ="'.$id.'"');
        return $query->result_array();
    }
    public function countRowS(){
    $query = $this->db->query('SELECT * FROM surveyor');
    return $query->num_rows();
    }
    public function showS(){
    $query = $this->db->query("SELECT * FROM surveyor where status = 'AKTIF' or status = 'TESTER'");
    return $query->result_array();
    }

    public function showByWilayah($wilayah=""){
    $query = $this->db->query("SELECT * FROM surveyor where wilayah_survey = '".$wilayah."'");
    return $query->result_array();
    }

    public function tableName(){
        return 'surveyor';
    }
    
    public function primaryKey(){
        return 'id_surveyor';
    }
    
    public function schema(){
        return ['id_surveyor','username','nama_surveyor','dom_surveyor','telp_surveyor', 'kec', 'kel', 'status'];
    }
}
?>