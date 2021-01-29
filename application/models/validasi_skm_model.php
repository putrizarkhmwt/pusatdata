<?php
require_once 'basemodel.php';

class Validasi_SKM_Model extends BaseModel{
    public function __construct(){
        parent::__construct($this);
    }
    public function countRowD(){
    $query = $this->db->query('SELECT * FROM validasi_skm');
    return $query->num_rows();
    }
    public function showID($id, $tgl, $nik_rt){
    $query = $this->db->query("SELECT * FROM validasi_skm where nik_rt ='".$nik_rt."' and tgl_survey ='".$tgl."' and nik_skm ='".$id."'");
    return $query->result_array();
    }
    public function showD(){
    $query = $this->db->query('SELECT * FROM validasi_skm');
    return $query->result_array();
    }
    public function errorK(){
    $query = $this->db->query("SELECT * FROM validasi_skm where val_status != 'LAMA' and gabung = 'BELUM ADA KETERANGAN'");
    return $query->result_array();
    }
    public function errorS(){
    $query = $this->db->query("SELECT * FROM validasi_skm where val_status != 'LAMA' and surveyor_id = 1 or surveyor_id = 0 or surveyor_id = 73");
    return $query->result_array();
    }
    public function listS($number){
    $query = $this->db->query('SELECT * FROM validasi_skm where id_surveyor ='.$number);
    return $query->result_array();
    }
    public function menambah()
    {
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s');
        $post = $this->input->post();
        $this->nik_skm = $post["nik_skm"];
        $this->nik_rt = $post["nik_rt"];
        $this->val_id = $post["val_id"];
        $this->val_status = $post["val_status"];
        $this->ket = $post["ket"];
        $this->surveyor_id = $post["surveyor_id"];
        $this->catatan = $post["catatan"];
        $this->tgl_survey = $post["tgl_survey"];
        $this->db->insert($this->tableName(), $this);
    }

    public function edit($id, $tgl, $nik_rt)
    {
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s');
        $kriteria = "(nik_skm = '".$id."' AND  tgl_survey  = '".$tgl."' AND  nik_rt  = '".$nik_rt."')";
        $post = $this->input->post();
        $this->nik_skm = $post["nik_skm"];
        $this->nik_rt = $post["nik_rt"];
        $this->val_id = $post["val_id"];
        $this->val_status = $post["val_status"];
        $this->ket = $post["ket"];
        $this->surveyor_id = $post["surveyor_id"];
        $this->catatan = $post["catatan"];
        $this->tgl_survey = $post["tgl_survey"];
        $this->update_tgl = $date;
        $this->db->where($kriteria);
        $this->db->update($this->tableName(), $this);

    }

    public function delete($id, $tgl, $nik_rt)
    {
        $kriteria = "(nik_rt = '".$nik_rt."' AND nik_skm = '".$id."' AND  tgl_survey  = '".$tgl."')";
        $this->db->where($kriteria);
        $this->db->delete($this->tableName());
    }

    //update tgl survey

    public function update_data($tableName,$data,$where){
      $this->db->update($tableName,$data,$where);
    }


    function list($id= '', $tgl='' ,$nik_rt='')
    {
        $this->db->select('val.*, sur.id_surveyor, sur.nama_surveyor' );
        $this->db->from('validasi_skm as val');
        $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
        $kriteria = "(nik_rt = '".$nik_rt."' AND nik_skm = '".$id."' AND  tgl_survey  = '".$tgl."')";
        $this->db->where($kriteria);
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
        return 'validasi_skm';
    }
    
    public function primaryKey(){
        return 'nik_skm';
    }
    
    public function schema(){
        return ['nik_skm', 'ket', 'catatan', 'surveyor_id', 'val_id', 'val_status', 'gabung', 'val_tgl', 'update_tgl'];
    }
}
?>