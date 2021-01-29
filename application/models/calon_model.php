<?php
require_once 'basemodel.php';

class Calon_Model extends BaseModel{
    public function __construct(){
        parent::__construct($this);
    }
    public function countRowC(){
    $query = $this->db->query('SELECT * FROM calon');
    return $query->num_rows();
    }
    public function tableName(){
        return 'calon';
    }
    
    public function primaryKey(){
        return 'id_calon';
    }
    
    public function schema(){
        return ['id_calon','calon_nik','calon_nama','calon_alamat','calon_kec','calon_kel','rt','rw'];
    }
}
?>
