<?php
require_once 'basemodel.php';

class Dokumentasi_Mbr_Model extends BaseModel{
    public function __construct(){
        parent::__construct($this);
    }

    public function add($tableName,$data)
    {
        $this->db->insert($tableName, $data);
    }

    public function update_data($tableName,$data,$where){
      $this->db->update($tableName,$data,$where);
    }

    public function delete($id){
        $this->db->query('DELETE FROM dokumentasi_mbr WHERE id_mbr ="'.$id.'"');
    }

    public function showID($id){
        $query = $this->db->query('SELECT * FROM dokumentasi_mbr where id_mbr ="'.$id.'"');
        return $query->result_array();
    }

    public function list($id= '')
    {
        $this->db->select('*' );
        $this->db->from('dokumentasi_mbr dok');
        $this->db->where('dok.id_mbr ="'.$id.'"');
        /*$this->db->where('BaseTbl.roleId !=', 1);*/
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    public function tableName(){
        return 'dokumentasi_mbr';
    }
    
    public function primaryKey(){
        return 'id_mbr';
    }
    
    public function schema(){
        return ['id_mbr','foto_depan_rumah','foto_kondisi_rumah','foto_selfie','catatan', 'ket', 'sur_id', 'tgl_survey', 'tgl_upload', 'update_tgl'];
    }
}
?>