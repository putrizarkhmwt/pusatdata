<?php
require_once 'basemodel.php';

class Validatorq_SKM_Model extends BaseModel{
    public function __construct(){
        parent::__construct($this);
    }
    public function countRowV(){
    $query = $this->db->query('SELECT * FROM skm');
    return $query->num_rows();
    }

    public function showVal(){
    $query = $this->db->query('SELECT * FROM skm');
    return $query->result_array();
    }

    public function record_count() {
        return $this->db->count_all("skm");
    }

    function valval($id = '')
    {
        $this->db->select('skm.no, skm.nama, skm.kk, skm.nik, skm.kecamatan, skm.kelurahan, skm.alamat, val.ket, val.catatan');
        $this->db->from('skm as skm');
        $this->db->join('validasi as val', 'skm.nik = val.nik_skm','left');
        /*$this->db->where('BaseTbl.isDeleted', 0);*/
        $this->db->where('skm.nik =', $id);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function banding($id = '',$tgl_survey = '', $nik_rt='')
    {
        $this->db->select('*');
        $this->db->from('validasi_skm');
        /*$this->db->where('BaseTbl.isDeleted', 0);*/
        $kriteria = "(nik_skm = '".$id."' AND tgl_survey = '".$tgl_survey."' AND nik_rt = '".$nik_rt."' )";
        $this->db->where($kriteria);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function validator($id = '',$jadwal_survey = '', $nik_rt='')
    {
        $this->db->select('*');
        $this->db->from('skm');
        /*$this->db->where('BaseTbl.isDeleted', 0);*/
        $kriteria = "(nik = '".$id."' AND jadwal_survey = '".$jadwal_survey."' AND nik_rt = '".$nik_rt."' )";
        $this->db->where($kriteria);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


    public function fetch_data($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("mbr2018");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    public function tableName(){
        return 'mbr2018';
    }
    
    public function primaryKey(){
        return 'no';
    }
    
    public function schema(){
        return ['no', 'nama', 'kk', 'nik', 'kecamatan', 'kelurahan', 'alamat', 'ket', 'catatan'/*, 'id_val', 'val_status', 'tgl_val'*/];
    }
}
?>
