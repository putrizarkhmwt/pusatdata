<?php
require_once 'basemodel.php';

class Dokumentasi_Skm_Model extends BaseModel{
    public function __construct(){
        parent::__construct($this);
    }

    public function delete($nik,$tgl_survey,$nik_rt){
        $this->db->query("DELETE FROM dokumentasi_skm where nik_rt ='".$nik_rt."' and tgl_survey ='".$tgl_survey."' and nik_skm ='".$nik."'");
    }

    public function update_data($tableName,$data,$where){
      $this->db->update($tableName,$data,$where);
    }

    public function add($tableName,$data)
    {
        $this->db->insert($tableName, $data);
    }

    public function showID($nik, $tgl_survey, $nik_rt){
        $query = $this->db->query("SELECT * FROM dokumentasi_skm where nik_rt ='".$nik_rt."' and tgl_survey ='".$tgl_survey."' and nik_skm ='".$nik."'");
        return $query->result_array();
    }

    public function list($id= '', $tgl='' ,$nik_rt='')
    {
        $this->db->select('dok.*, sur.id_surveyor, sur.nama_surveyor' );
        $this->db->from('dokumentasi_skm as dok');
        $this->db->join('surveyor as sur', 'dok.sur_id = sur.id_surveyor','inner');
        $kriteria = "(nik_rt = '".$nik_rt."' AND nik_skm = '".$id."' AND  tgl_survey  = '".$tgl."')";
        $this->db->where($kriteria);
        /*$this->db->where('BaseTbl.roleId !=', 1);*/
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    public function bandingDokumentasi($nik, $tgl_survey, $nik_rt){
        $this->db->select('*');
        $this->db->from('dokumentasi_skm');
        /*$this->db->where('BaseTbl.isDeleted', 0);*/
        $kriteria = "(nik_skm = '".$nik."' AND tgl_survey = '".$tgl_survey."' AND nik_rt = '".$nik_rt."' )";
        $this->db->where($kriteria);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    public function tableName(){
        return 'dokumentasi_skm';
    }
    
    public function primaryKey(){
        return 'nik_skm';
    }
    
    public function schema(){
        return ['nik_skm','foto_depan_rumah','foto_kondisi_rumah','foto_selfie','catatan', 'ket', 'sur_id', 'tgl_survey', 'tgl_upload', 'update_tgl','nik_rt'];
    }
}
?>