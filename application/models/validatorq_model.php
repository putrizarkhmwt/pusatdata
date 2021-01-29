<?php
require_once 'basemodel.php';

class Validatorq_Model extends BaseModel{
    public function __construct(){
        parent::__construct($this);
    }
    public function countRowV(){
    $query = $this->db->query('SELECT * FROM mbr2018');
    return $query->num_rows();
    }

    public function showVal(){
    $query = $this->db->query('SELECT * FROM mbr2018');
    return $query->result_array();
    }

    public function record_count() {
        return $this->db->count_all("mbr2018");
    }

    function valval($id = '')
    {
        $this->db->select('mbr.no, mbr.nama, mbr.kk, mbr.nik, mbr.kecamatan, mbr.kelurahan, mbr.alamat, val.ket, val.catatan');
        $this->db->from('mbr2018 as mbr');
        $this->db->join('validasi as val', 'mbr.no = val.id_mbr','left');
        /*$this->db->where('BaseTbl.isDeleted', 0);*/
        $this->db->where('mbr.no =', $id);
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
