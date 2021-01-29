<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Cek_Dokumentasi_Model extends CI_Model
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

    function cekListingCount($sur_id, $tglawal, $tglakhir)
    {
        if(isset($tglawal) && isset($tglakhir)){
            $this->db->select('usr.name AS surveyor, mbr.no as id, mbr.nama, dok.id_mbr, dok.ket, dok.tgl_survey, dok.tgl_upload, dok.update_tgl');
            $this->db->from('tbl_users as usr');
            $this->db->join('dokumentasi_mbr as dok', 'usr.userId = dok.sur_id','inner');
            $this->db->join('mbr2018 as mbr', 'dok.id_mbr = mbr.no','inner');
            $this->db->where('usr.userId =', $sur_id);
            $this->db->where('dok.tgl_survey >=', $tglawal);
            $this->db->where('dok.tgl_survey <=', $tglakhir);
            $this->db->order_by('dok.tgl_upload' , 'desc');
            $queryval = $this->db->get();

            $this->db->select("skm.nik, skm.nama, skm.kecamatan, skm.kelurahan, skm.alamat, dok.tgl_survey, dok.ket, dok.catatan, 'SKM' as jenis_data, '-' as id");
            $this->db->from('dokumentasi_skm as dok');
            $this->db->join('tbl_users as usr', 'dok.sur_id = usr.userId','inner');
            $this->db->join('skm as skm', 'dok.tgl_survey = skm.jadwal_survey and skm.nik_rt = dok.nik_rt and dok.nik_skm = skm.nik','inner');
            $this->db->where('usr.userId =', $sur_id);
            $this->db->where('dok.tgl_survey >=', $tglawal);
            $this->db->where('dok.tgl_survey <=', $tglakhir);
            $this->db->order_by('dok.tgl_upload' , 'desc');
            $query_skm = $this->db->get();

            $total = count($queryval->result()) + count($query_skm->result());
            
            return $total;
        }
    }
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function cekListing($sur_id, $tglawal, $tglakhir, $page, $segment)
    {
        if(isset($tglawal) && isset($tglakhir)){
            $this->db->select("usr.name AS nama_surveyor, mbr.no as id, mbr.nik, mbr.alamat, mbr.kelurahan, mbr.kecamatan, mbr.nama, dok.id_mbr, dok.tgl_upload, dok.ket, dok.tgl_survey, dok.tgl_upload, dok.update_tgl, dok.foto_selfie, dok.foto_depan_rumah, foto_kondisi_rumah, 'MBR' as jenis_data");
            $this->db->from('tbl_users as usr');
            $this->db->join('dokumentasi_mbr as dok', 'usr.userId = dok.sur_id','inner');
            $this->db->join('mbr2018 as mbr', 'dok.id_mbr = mbr.no','inner');
            $this->db->where('usr.userId =', $sur_id);
            $this->db->where('dok.tgl_survey >=', $tglawal);
            $this->db->where('dok.tgl_survey <=', $tglakhir);
            $this->db->order_by('dok.tgl_upload' , 'desc');
            $queryval = $this->db->get()->result_array();

            $this->db->select("skm.nik, skm.nama, skm.kecamatan, skm.kelurahan, skm.alamat, usr.name as nama_surveyor, dok.tgl_survey, dok.tgl_upload, dok.ket, dok.catatan, dok.foto_selfie, dok.foto_depan_rumah, foto_kondisi_rumah, 'SKM' as jenis_data, '-' as id");
            $this->db->from('dokumentasi_skm as dok');
            $this->db->join('tbl_users as usr', 'dok.sur_id = usr.userId','inner');
            $this->db->join('skm as skm', 'dok.tgl_survey = skm.jadwal_survey and skm.nik_rt = dok.nik_rt and dok.nik_skm = skm.nik','inner');
            $this->db->where('usr.userId =', $sur_id);
            $this->db->where('dok.tgl_survey >=', $tglawal);
            $this->db->where('dok.tgl_survey <=', $tglakhir);
            $this->db->order_by('dok.tgl_upload' , 'desc');
            $query_skm = $this->db->get()->result_array();

            $result = array_merge($queryval,$query_skm);

            return $result;
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

  