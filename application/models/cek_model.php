<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Cek_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */

    
    public function showV(){
    $query = $this->db->query('SELECT * FROM mbr2018');
    return $query->result_array();
    }
    public function countRowV(){
    $query = $this->db->query('SELECT * FROM mbr2018');
    return $query->num_rows();
    }     

    function cekListingCount($sur_id, $ket, $valid_id, $tglawal, $tglakhir)
    {
        if(isset($ket)){
            if($ket=='ENTRY'){
                $this->db->select('sur.nama_surveyor AS surveyor, usr.name AS validator, mbr.no as id, mbr.nama, val.id_mbr, val.ket, val.gabung, val.tgl_survey, val.val_tgl, val.update_tgl, val.cek_gaji');
                $this->db->from('validasi as val');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->join('mbr2018 as mbr', 'val.id_mbr = mbr.no','inner');
                $this->db->join('tbl_users usr', 'val.val_id = usr.userId','inner');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.ket="ENTRY"');
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->where('val.ket = "ENTRY"');
                $this->db->order_by('val.val_tgl' , 'desc');
                $query_mbr = $this->db->get();

                $this->db->select('sur.nama_surveyor AS surveyor, usr.name AS validator, mbr.no as id, mbr.nama, val.id_mbr, val.ket, val.gabung, val.tgl_survey, val.val_tgl, val.update_tgl, val.cek_gaji');
                $this->db->from('tbl_users as usr');
                $this->db->join('validasi_duplicate as val', 'usr.userId = val.val_id','inner');
                $this->db->join('mbr2018 as mbr', 'val.id_mbr = mbr.no','inner');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.ket="ENTRY"');
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->where('val.ket = "ENTRY"');
                $this->db->order_by('val.val_tgl' , 'desc');
                $queryvaldup = $this->db->get();

                $this->db->select("skm.nik, skm.nama, skm.kecamatan, skm.kelurahan, skm.alamat, sur.nama_surveyor, usr.name, val.tgl_survey, val.ket, val.catatan, 'SKM' as jenis_data, '-' as id");
                $this->db->from('validasi_skm as val');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->join('skm as skm', 'val.tgl_survey = skm.jadwal_survey and skm.nik_rt = val.nik_rt and val.nik_skm = skm.nik','inner');
                $this->db->join('tbl_users as usr', 'val.val_id = usr.userId','inner');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.ket="ENTRY"');
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->order_by('val.val_tgl' , 'desc');
                $query_skm = $this->db->get();

                $total = count($query_mbr->result()) + count($queryvaldup->result()) + count($query_skm->result());
                
                return $total;
            }else if($ket=='BA'){
                $this->db->select('sur.nama_surveyor AS surveyor, usr.name AS validator, mbr.no as id, mbr.nama, val.id_mbr, val.ket, val.gabung, val.tgl_survey, val.val_tgl, val.update_tgl, val.cek_gaji');
                $this->db->from('tbl_users as usr');
                $this->db->join('validasi as val', 'usr.userId = val.val_id','inner');
                $this->db->join('mbr2018 as mbr', 'val.id_mbr = mbr.no','inner');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->where('val.ket != "ENTRY"');
                $this->db->order_by('val.val_tgl' , 'desc');
                $queryval = $this->db->get();

                $this->db->select('sur.nama_surveyor AS surveyor, usr.name AS validator, mbr.no as id, mbr.nama, val.id_mbr, val.ket, val.gabung, val.tgl_survey, val.val_tgl, val.update_tgl, val.cek_gaji');
                $this->db->from('tbl_users as usr');
                $this->db->join('validasi_duplicate as val', 'usr.userId = val.val_id','inner');
                $this->db->join('mbr2018 as mbr', 'val.id_mbr = mbr.no','inner');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->where('val.ket != "ENTRY"');
                $this->db->order_by('val.val_tgl' , 'desc');
                $queryvaldup = $this->db->get();

                $this->db->select("skm.nik, skm.nama, skm.kecamatan, skm.kelurahan, skm.alamat, sur.nama_surveyor, usr.name, val.tgl_survey, val.ket, val.catatan, 'SKM' as jenis_data, '-' as id");
                $this->db->from('validasi_skm as val');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->join('skm as skm', 'val.tgl_survey = skm.jadwal_survey and skm.nik_rt = val.nik_rt and val.nik_skm = skm.nik','inner');
                $this->db->join('tbl_users as usr', 'val.val_id = usr.userId','inner');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.ket!="ENTRY"');
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->order_by('val.val_tgl' , 'desc');
                $query_skm = $this->db->get();

                $total = count($queryval->result()) + count($queryvaldup->result()) + count($query_skm->result());
                
                return $total;
            }else if($ket=='SEMUA'){
                $this->db->select('sur.nama_surveyor AS surveyor, usr.name AS validator, mbr.no as id, mbr.nama, val.id_mbr, val.ket, val.gabung, val.tgl_survey, val.val_tgl, val.update_tgl, val.cek_gaji');
                $this->db->from('tbl_users as usr');
                $this->db->join('validasi as val', 'usr.userId = val.val_id','inner');
                $this->db->join('mbr2018 as mbr', 'val.id_mbr = mbr.no','inner');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->order_by('val.val_tgl' , 'desc');
                $queryval = $this->db->get();

                $this->db->select('sur.nama_surveyor AS surveyor, usr.name AS validator, mbr.no as id, mbr.nama, val.id_mbr, val.ket, val.gabung, val.tgl_survey, val.val_tgl, val.update_tgl, val.cek_gaji');
                $this->db->from('tbl_users as usr');
                $this->db->join('validasi_duplicate as val', 'usr.userId = val.val_id','inner');
                $this->db->join('mbr2018 as mbr', 'val.id_mbr = mbr.no','inner');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->order_by('val.val_tgl' , 'desc');
                $queryvaldup = $this->db->get();

                $this->db->select("skm.nik, skm.nama, skm.kecamatan, skm.kelurahan, skm.alamat, sur.nama_surveyor, usr.name, val.tgl_survey, val.ket, val.catatan, 'SKM' as jenis_data, '-' as id");
                $this->db->from('validasi_skm as val');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->join('skm as skm', 'val.tgl_survey = skm.jadwal_survey and skm.nik_rt = val.nik_rt and val.nik_skm = skm.nik','inner');
                $this->db->join('tbl_users as usr', 'val.val_id = usr.userId','inner');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->order_by('val.val_tgl' , 'desc');
                $query_skm = $this->db->get();

                $total = count($queryval->result()) + count($queryvaldup->result()) + count($query_skm->result());
                
                return $total;
            }
        }else{
            $this->db->select('sur.nama_surveyor AS surveyor, usr.name AS validator, val.id_mbr, val.ket, val.tgl_survey, val.gabung, val.val_tgl, val.update_tgl, val.cek_gaji');
            $this->db->from('tbl_users as usr');
            $this->db->join('validasi as val', 'usr.userId = val.val_id','inner');
            $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
            
            $this->db->where('sur.id_surveyor =', $sur_id);
            $this->db->where('val.tgl_survey >=', $tglawal);
            $this->db->where('val.tgl_survey <=', $tglakhir);
            $this->db->order_by('val.val_tgl' , 'desc');
            $query = $this->db->get();
            
            return count($query->result());
        }
            
        // }
    }
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function cekListing($sur_id, $ket, $valid_id, $tglawal, $tglakhir, $page, $segment)
    {
        if(isset($ket)){
            if($ket=='ENTRY'){
                $this->db->select("mbr.no as id, mbr.nik, mbr.nama, mbr.kecamatan, mbr.kelurahan, mbr.alamat, sur.nama_surveyor, usr.name, val.val_tgl, val.tgl_survey, val.ket, val.catatan, dok.foto_depan_rumah, dok.foto_kondisi_rumah, dok.foto_selfie, 'MBR' as jenis_data");
                $this->db->from('validasi val');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->join('mbr2018 as mbr', 'val.id_mbr = mbr.no','inner');
                $this->db->join('tbl_users usr', 'val.val_id = usr.userId','inner');
                $this->db->join('dokumentasi_mbr dok', 'val.id_mbr = dok.id_mbr','left');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.ket="ENTRY"');
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->order_by('val.val_tgl' , 'desc');
                $query_mbr = $this->db->get()->result_array();

                $this->db->select("mbr.no as id, mbr.nik, mbr.nama, mbr.kecamatan, mbr.kelurahan, mbr.alamat, sur.nama_surveyor, usr.name, val.val_tgl, val.tgl_survey, val.ket, val.catatan, dok.foto_depan_rumah, dok.foto_kondisi_rumah, dok.foto_selfie, 'MBR' as jenis_data");
                $this->db->from('validasi_duplicate val');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->join('mbr2018 as mbr', 'val.id_mbr = mbr.no','inner');
                $this->db->join('tbl_users usr', 'val.val_id = usr.userId','inner');
                $this->db->join('dokumentasi_mbr dok', 'val.id_mbr = dok.id_mbr','left');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.ket="ENTRY"');
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->order_by('val.val_tgl' , 'desc');
                $queryvaldup = $this->db->get()->result_array();

                $this->db->select("skm.nik_rt as nik, skm.nama_kk as nama, skm.kecamatan, skm.kelurahan, skm.alamat, sur.nama_surveyor, usr.name, val.val_tgl, val.tgl_survey, val.ket, val.catatan, dok.foto_depan_rumah, dok.foto_kondisi_rumah, dok.foto_selfie, 'SKM' as jenis_data, '-' as id");
                $this->db->from('validasi_skm as val');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->join('skm as skm', 'val.tgl_survey = skm.jadwal_survey and skm.nik_rt = val.nik_rt and val.nik_skm = skm.nik','inner');
                $this->db->join('tbl_users as usr', 'val.val_id = usr.userId','inner');
                $this->db->join('dokumentasi_skm as dok', 'val.tgl_survey = dok.tgl_survey and dok.nik_rt = val.nik_rt and val.nik_skm = dok.nik_skm','left');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.ket="ENTRY"');
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->order_by('val.val_tgl' , 'desc');
                $query_skm = $this->db->get()->result_array();
                
                $result = array_merge($query_mbr,$queryvaldup,$query_skm);
                return $result;
            }else if($ket=='BA'){
                $this->db->select("mbr.no as id, mbr.nik, mbr.nama, mbr.kecamatan, mbr.kelurahan, mbr.alamat, sur.nama_surveyor, usr.name, val.val_tgl, val.tgl_survey, val.ket, val.catatan, dok.foto_depan_rumah, dok.foto_kondisi_rumah, dok.foto_selfie, 'MBR' as jenis_data");
                $this->db->from('validasi val');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->join('mbr2018 as mbr', 'val.id_mbr = mbr.no','inner');
                $this->db->join('tbl_users usr', 'val.val_id = usr.userId','inner');
                $this->db->join('dokumentasi_mbr dok', 'val.id_mbr = dok.id_mbr','left');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.ket!="ENTRY"');
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->order_by('val.val_tgl' , 'desc');
                $queryval = $this->db->get()->result_array();

                $this->db->select("mbr.no as id, mbr.nik, mbr.nama, mbr.kecamatan, mbr.kelurahan, mbr.alamat, sur.nama_surveyor, usr.name, val.val_tgl, val.tgl_survey, val.ket, val.catatan, dok.foto_depan_rumah, dok.foto_kondisi_rumah, dok.foto_selfie, 'MBR' as jenis_data");
                $this->db->from('validasi_duplicate val');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->join('mbr2018 as mbr', 'val.id_mbr = mbr.no','inner');
                $this->db->join('tbl_users usr', 'val.val_id = usr.userId','inner');
                $this->db->join('dokumentasi_mbr dok', 'val.id_mbr = dok.id_mbr','left');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.ket!="ENTRY"');
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->order_by('val.val_tgl' , 'desc');
                $queryvaldup = $this->db->get()->result_array();

                $this->db->select("skm.nik_rt as nik, skm.nama_kk as nama, skm.kecamatan, skm.kelurahan, skm.alamat, sur.nama_surveyor, usr.name, val.val_tgl, val.tgl_survey, val.ket, val.catatan, dok.foto_depan_rumah, dok.foto_kondisi_rumah, dok.foto_selfie, 'SKM' as jenis_data, '-' as id");
                $this->db->from('validasi_skm as val');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->join('skm as skm', 'val.tgl_survey = skm.jadwal_survey and skm.nik_rt = val.nik_rt and val.nik_skm = skm.nik','inner');
                $this->db->join('tbl_users as usr', 'val.val_id = usr.userId','inner');
                $this->db->join('dokumentasi_skm as dok', 'val.tgl_survey = dok.tgl_survey and dok.nik_rt = val.nik_rt and val.nik_skm = dok.nik_skm','left');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.ket!="ENTRY"');
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->order_by('val.val_tgl' , 'desc');
                $query_skm = $this->db->get()->result_array();

                $result = array_merge($queryval,$queryvaldup,$query_skm);
                
                return $result;
            }else if($ket=='SEMUA'){
                $this->db->select("mbr.no as id, mbr.nik, mbr.nama, mbr.kecamatan, mbr.kelurahan, mbr.alamat, sur.nama_surveyor, usr.name, val.val_tgl, val.tgl_survey, val.ket, val.catatan,  dok.foto_depan_rumah, dok.foto_kondisi_rumah, dok.foto_selfie, 'MBR' as jenis_data");
                $this->db->from('validasi val');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->join('mbr2018 as mbr', 'val.id_mbr = mbr.no','inner');
                $this->db->join('tbl_users usr', 'val.val_id = usr.userId','inner');
                $this->db->join('dokumentasi_mbr dok', 'val.id_mbr = dok.id_mbr','left');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->order_by('val.val_tgl' , 'desc');
                $queryval = $this->db->get()->result_array();

                $this->db->select("mbr.no as id, mbr.nik, mbr.nama, mbr.kecamatan, mbr.kelurahan, mbr.alamat, sur.nama_surveyor, usr.name, val.val_tgl, val.tgl_survey, val.ket, val.catatan, dok.foto_depan_rumah, dok.foto_kondisi_rumah, dok.foto_selfie, 'MBR' as jenis_data");
                $this->db->from('validasi_duplicate val');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->join('mbr2018 as mbr', 'val.id_mbr = mbr.no','inner');
                $this->db->join('tbl_users usr', 'val.val_id = usr.userId','inner');
                $this->db->join('dokumentasi_mbr dok', 'val.id_mbr = dok.id_mbr','left');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->order_by('val.val_tgl' , 'desc');
                $queryvaldup = $this->db->get()->result_array();

                $this->db->select("skm.nik_rt as nik, skm.nama_kk as nama, skm.kecamatan, skm.kelurahan, skm.alamat, sur.nama_surveyor, usr.name, val.val_tgl, val.tgl_survey, val.ket, val.catatan, dok.foto_depan_rumah, dok.foto_kondisi_rumah, dok.foto_selfie, 'SKM' as jenis_data, '-' as id");
                $this->db->from('validasi_skm as val');
                $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
                $this->db->join('skm as skm', 'val.tgl_survey = skm.jadwal_survey and skm.nik_rt = val.nik_rt and val.nik_skm = skm.nik','inner');
                $this->db->join('tbl_users as usr', 'val.val_id = usr.userId','inner');
                $this->db->join('dokumentasi_skm as dok', 'val.tgl_survey = dok.tgl_survey and dok.nik_rt = val.nik_rt and val.nik_skm = dok.nik_skm','left');
                $this->db->where('sur.id_surveyor =', $sur_id);
                $this->db->where('val.tgl_survey >=', $tglawal);
                $this->db->where('val.tgl_survey <=', $tglakhir);
                $this->db->order_by('val.val_tgl' , 'desc');
                $query_skm = $this->db->get()->result_array();

                $result = array_merge($queryval,$queryvaldup,$query_skm);

                return $result;
            }
        }else{
            $this->db->select('sur.nama_surveyor AS surveyor, usr.name AS validator, mbr.nama, usr.name, val.val_tgl, val.id_mbr, val.ket, val.gabung, val.tgl_survey, val.val_tgl, val.update_tgl, val.cek_gaji');
            $this->db->from('tbl_users as usr');
            $this->db->join('validasi as val', 'usr.userId = val.val_id','inner');
            $this->db->join('mbr2018 as mbr', 'val.id_mbr = mbr.no','inner');
            $this->db->join('surveyor as sur', 'val.surveyor_id = sur.id_surveyor','inner');
            $this->db->where('sur.id_surveyor =', $sur_id);
            $this->db->where('val.tgl_survey >=', $tglawal);
            $this->db->where('val.tgl_survey <=', $tglakhir);
            $this->db->order_by('val.val_tgl' , 'desc');
            $query = $this->db->get();
            
            return $query->result();
        }
    }
    public function record_count() {
        return $this->db->count_all("validasi");
    }
    /**
     * This function is used to get the user roles information
     * @return array $result : This is result of the query
     */
    /*function getUserRoles()
    {
        $this->db->select('roleId, role');
        $this->db->from('tbl_roles');
        $this->db->where('roleId !=', 1);
        $query = $this->db->get();
        
        return $query->result();
    }*/

    /**
     * This function is used to check whether email id is already exist or not
     * @param {string} $email : This is email id
     * @param {number} $userId : This is user id
     * @return {mixed} $result : This is searched result
     */
    /*function checkEmailExists($email, $userId = 0)
    {
        $this->db->select("email");
        $this->db->from("tbl_users");
        $this->db->where("email", $email);   
        $this->db->where("isDeleted", 0);
        if($userId != 0){
            $this->db->where("userId !=", $userId);
        }
        $query = $this->db->get();

        return $query->result();
    }*/
    
    
    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    /*function addNewUser($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_users', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }*/
    
    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    /*function getUserInfo($userId)
    {
        $this->db->select('userId, name, email, mobile, roleId');
        $this->db->from('tbl_users');
        $this->db->where('isDeleted', 0);
        $this->db->where('roleId !=', 1);
        $this->db->where('userId', $userId);
        $query = $this->db->get();
        
        return $query->result();
    }
    */
    
    /**
     * This function is used to update the user information
     * @param array $userInfo : This is users updated information
     * @param number $userId : This is user id
     */
    /*function editUser($userInfo, $userId)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $userInfo);
        
        return TRUE;
    }

    public function record_count() {
        return $this->db->count_all("tbl_users");
    }*/
    
    /**
     * This function is used to delete the user information
     * @param number $userId : This is user id
     * @return boolean $result : TRUE / FALSE
     */
    /*function deleteUser($userId, $userInfo)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $userInfo);
        
        return $this->db->affected_rows();
    }*/


    /**
     * This function is used to match users password for change password
     * @param number $userId : This is user id
     */
    /*function matchOldPassword($userId, $oldPassword)
    {
        $this->db->select('userId, password');
        $this->db->where('userId', $userId);        
        $this->db->where('isDeleted', 0);
        $query = $this->db->get('tbl_users');
        
        $user = $query->result();

        if(!empty($user)){
            if(verifyHashedPassword($oldPassword, $user[0]->password)){
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }*/
    
    /**
     * This function is used to change users password
     * @param number $userId : This is user id
     * @param array $userInfo : This is user updation info
     */
    /*function changePassword($userId, $userInfo)
    {
        $this->db->where('userId', $userId);
        $this->db->where('isDeleted', 0);
        $this->db->update('tbl_users', $userInfo);
        
        return $this->db->affected_rows();
    }*/
}

  