<?php
require_once 'basemodel.php';

class Skm_Model extends BaseModel{
    public function __construct(){
        parent::__construct($this);
    }

    public function update_data($tableName,$data,$where){
      $this->db->update($tableName,$data,$where);
    }

    public function primaryKey(){
        return 'nik_skm';
    }
    
    public function tableName(){
        return 'skm';
    }
    
    public function schema(){
        return ['nik_skm','nama','nik_rt','nama_kk','alamat', 'kecamatan', 'kelurahan', 'tgl_pengajuan', 'jadwal_survey', 'surveyor'];
    }
}
?>