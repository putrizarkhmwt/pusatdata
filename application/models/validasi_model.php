<?php
require_once 'basemodel.php';

class Validasi_Model extends BaseModel{
    public function __construct(){
        parent::__construct($this);
    }
    public function countRowD(){
    $query = $this->db->query('SELECT * FROM valadasi');
    return $query->num_rows();
    }
    public function showID($id){
    $query = $this->db->query('SELECT * FROM validasi where id_mbr ="'.$id.'"');
    return $query->result_array();
    }
    public function showD(){
    $query = $this->db->query('SELECT * FROM validasi');
    return $query->result_array();
    }
    public function errorK(){
    $query = $this->db->query("SELECT * FROM validasi where val_status != 'LAMA' and gabung = 'BELUM ADA KETERANGAN'");
    return $query->result_array();
    }
    public function errorS(){
    $query = $this->db->query("SELECT * FROM validasi where val_status != 'LAMA' and surveyor_id = 1 or surveyor_id = 0 or surveyor_id = 73");
    return $query->result_array();
    }
    public function listS($number){
    $query = $this->db->query('SELECT * FROM validasi where id_surveyor ='.$number);
    return $query->result_array();
    }
    public function menambah()
    {
        $post = $this->input->post();
        $this->id_mbr = $post["id_mbr"];
        $this->val_id = $post["val_id"];
        $this->val_status = $post["val_status"];
        $this->ket = $post["ket"];
        $this->surveyor_id = $post["surveyor_id"];
        $this->catatan = $post["catatan"];
        $this->tgl_survey = date('Y-m-d', strtotime($post["tgl_survey"]));
        $this->val_tgl = date("Y-m-d H:i:s"); 
        $this->update_tgl = date("Y-m-d H:i:s"); 
        $this->db->insert($this->tableName(), $this);
    }
    function list($id= '')
    {
        $this->db->select('val.id_mbr, val.ket, val.catatan, val.surveyor_id, val.val_id, val.val_status, val.tgl_survey, val.val_tgl, sur.id_surveyor, sur.nama_surveyor' );
        $this->db->from('validasi as val');
        $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
        $this->db->where('val.id_mbr ="'.$id.'"');
        /*$this->db->where('BaseTbl.roleId !=', 1);*/
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    /*public function record_count() {
        return $this->db->count_all("validasi");
    }
    public function fetch_data($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("validasi");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }*/
    public function tableName(){
        return 'validasi';
    }
    
    public function primaryKey(){
        return 'id_mbr';
    }
    
    public function schema(){
        return ['id_mbr', 'ket', 'catatan', 'surveyor_id', 'val_id', 'val_status', 'gabung', 'tgl_survey', 'val_tgl', 'update_tgl'];
    }
}
?>