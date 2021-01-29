<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Validator_model extends CI_Model
{
    public function showV(){
    $query = $this->db->query('SELECT * FROM mbr2018');
    return $query->result_array();
    }
    public function countRowV(){
    $query = $this->db->query('SELECT * FROM mbr2018');
    return $query->num_rows();
    }     
    /*OR  mbr.kk  LIKE '%".$searchText."%'
                            OR  mbr.nik  LIKE '%".$searchText."%'*/
    /*no', 'nama', 'kk', 'nik', 'kecamatan', 'kelurahan', 'alamat', 'ket', 'catatan'*/
    function validatorListingCount($searchText = '')
    {
        $this->db->select('mbr.no, mbr.nama, mbr.kk, mbr.nik, mbr.kecamatan, mbr.kelurahan, mbr.alamat');
        $this->db->from('mbr2018 as mbr');
        if(!empty($searchText)) {
            $likeCriteria = "(mbr.no  LIKE '".$searchText."%'
                            OR  mbr.nama  LIKE '%".$searchText."%'
                            OR  mbr.nik  LIKE '".$searchText."%'
                            OR  mbr.kk  LIKE '".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        // $this->db->select('mbr.no, mbr.nama, mbr.kk, mbr.nik, mbr.kecamatan, mbr.kelurahan, mbr.alamat, val.tgl_survey, val.ket, val.catatan');
        // $this->db->from('mbr2018 as mbr');
        // $this->db->join('validasi as val', 'mbr.no = val.id_mbr','left');
        // if(!empty($searchText)) {
        //     $likeCriteria = "(mbr.no  LIKE '%".$searchText."%'
        //                     OR  mbr.nama  LIKE '%".$searchText."%'
        //                     OR  mbr.nik  LIKE '%".$searchText."%'
        //                     OR  mbr.kk  LIKE '".$searchText."%'
        //                     OR  mbr.kecamatan  LIKE '".$searchText."%'
        //                     OR  mbr.kelurahan  LIKE '".$searchText."%'
        //                     OR  mbr.alamat  LIKE '%".$searchText."%'
        //                     OR  val.ket  LIKE '%".$searchText."%'
        //                     OR  val.catatan  LIKE '%".$searchText."%')";
        //     $this->db->where($likeCriteria);
        // }
        /*$this->db->where('BaseTbl.isDeleted', 0);
        $this->db->where('BaseTbl.roleId !=', 1);*/
        $query = $this->db->get();
        
        return count($query->result());
    }
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function validatorListing($searchText = '', $page, $segment)
    {
        $this->db->select('mbr.no, mbr.nama, mbr.kk, mbr.nik, mbr.kecamatan, mbr.kelurahan, mbr.alamat');
        $this->db->from('mbr2018 as mbr');
        if(!empty($searchText)) {
            $likeCriteria = "(mbr.no  LIKE '".$searchText."%'
                            OR  mbr.nama  LIKE '%".$searchText."%'
                            OR  mbr.nik  LIKE '".$searchText."%'
                            OR  mbr.kk  LIKE '".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        // $this->db->select('mbr.no, mbr.nama, mbr.kk, mbr.nik, mbr.kecamatan, mbr.kelurahan, mbr.alamat, val.tgl_survey, val.ket, val.catatan');
        // $this->db->from('mbr2018 as mbr');
        // $this->db->join('validasi as val', 'mbr.no = val.id_mbr','left');
        // if(!empty($searchText)) {
        //     $likeCriteria = "(mbr.no  LIKE '".$searchText."%'
        //                     OR  mbr.nik  LIKE '".$searchText."%'
        //                     OR  mbr.kk  LIKE '".$searchText."%'
        //                     OR  mbr.nama  LIKE '".$searchText."%'
        //                     OR  mbr.kecamatan  LIKE '".$searchText."%'
        //                     OR  mbr.kelurahan  LIKE '".$searchText."%'
        //                     OR  mbr.alamat  LIKE '".$searchText."%'
        //                     OR  val.ket  LIKE '".$searchText."%'
        //                     OR  val.catatan  LIKE '".$searchText."%')";
        //     $this->db->where($likeCriteria);
        // }
        /*$this->db->where('BaseTbl.isDeleted', 0);
        $this->db->where('BaseTbl.roleId !=', 1);*/

        $this->db->order_by('CAST(mbr.no AS SIGNED)', 'asc');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
}

  