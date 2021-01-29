<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Validator_SKM_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */

    /*public function showU(){
    $query = $this->db->query('SELECT * FROM tbl_users');
    return $query->result_array();
    }
    public function countRowU(){
    $query = $this->db->query('SELECT * FROM tbl_users');
    return $query->num_rows();
    }
    public function showC(){
    $query = $this->db->query('SELECT * FROM calon');
    return $query->result_array();
    }
    public function countRowC(){
    $query = $this->db->query('SELECT * FROM calon');
    return $query->num_rows();
    }*/
    public function showV(){
    $query = $this->db->query('SELECT * FROM skm');
    return $query->result_array();
    }
    public function countRowV(){
    $query = $this->db->query('SELECT * FROM skm');
    return $query->num_rows();
    }     
    /*OR  mbr.kk  LIKE '%".$searchText."%'
                            OR  mbr.nik  LIKE '%".$searchText."%'*/
    /*no', 'nama', 'kk', 'nik', 'kecamatan', 'kelurahan', 'alamat', 'ket', 'catatan'*/
    function validatorListingCount($searchText = '')
    {
        $this->db->select('skm.nik, skm.nama, skm.nik_rt, skm.nama_kk, skm.kecamatan, skm.kelurahan, skm.alamat, skm.jenis_skm, skm.tgl_pengajuan, skm.jadwal_survey, skm.surveyor');
        $this->db->from('skm as skm');
        if(!empty($searchText)) {
            $likeCriteria = "(
                            skm.nik  LIKE '".$searchText."%'
                            OR  skm.nama  LIKE '%".$searchText."%'
                            OR  skm.nik_rt  LIKE '".$searchText."%'
                            OR  skm.jadwal_survey  LIKE '%".$searchText."%'
                            OR  skm.surveyor  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        // $this->db->select('skm.nik, skm.nama, skm.nik_rt, skm.nama_kk, skm.kecamatan, skm.kelurahan, skm.alamat, skm.jenis_skm, skm.tgl_pengajuan, skm.jadwal_survey, skm.surveyor, val.tgl_survey, val.ket, val.catatan');
        // $this->db->from('skm as skm');
        // $this->db->join('validasi_skm as val', 'skm.jadwal_survey = val.tgl_survey and skm.nik_rt = val.nik_rt and skm.nik = val.nik_skm','left');
        // if(!empty($searchText)) {
        //     $likeCriteria = "(
        //                     skm.nik  LIKE '".$searchText."%'
        //                     OR  skm.nama  LIKE '%".$searchText."%'
        //                     OR  skm.nik_rt  LIKE '".$searchText."%'
        //                     OR  skm.jadwal_survey  LIKE '%".$searchText."%'
        //                     OR  skm.surveyor  LIKE '%".$searchText."%')";
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
        $this->db->select('skm.nik, skm.nama, skm.nik_rt, skm.nama_kk, skm.kecamatan, skm.kelurahan, skm.alamat, skm.jenis_skm, skm.tgl_pengajuan, skm.jadwal_survey, skm.surveyor');
        $this->db->from('skm as skm');
        if(!empty($searchText)) {
            $likeCriteria = "(
                            skm.nik  LIKE '".$searchText."%'
                            OR  skm.nama  LIKE '%".$searchText."%'
                            OR  skm.nik_rt  LIKE '".$searchText."%'
                            OR  skm.jadwal_survey  LIKE '%".$searchText."%'
                            OR  skm.surveyor  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        // $this->db->select('skm.nik, skm.nama, skm.nik_rt, skm.nama_kk, skm.kecamatan, skm.kelurahan, skm.alamat, skm.jenis_skm, skm.tgl_pengajuan, skm.jadwal_survey, skm.surveyor, val.tgl_survey, val.ket, val.catatan');
        // $this->db->from('skm as skm');
        // $this->db->join('validasi_skm as val', 'skm.jadwal_survey = val.tgl_survey and skm.nik_rt = val.nik_rt and skm.nik = val.nik_skm','left');
        // if(!empty($searchText)) {
        //     $likeCriteria = "(
        //                     skm.nik  LIKE '".$searchText."%'
        //                     OR  skm.nama  LIKE '%".$searchText."%'
        //                     OR  skm.nik_rt  LIKE '".$searchText."%'
        //                     OR  skm.jadwal_survey  LIKE '%".$searchText."%'
        //                     OR  skm.surveyor  LIKE '%".$searchText."%')";
        //     $this->db->where($likeCriteria);
        // }
        /*$this->db->where('BaseTbl.isDeleted', 0);
        $this->db->where('BaseTbl.roleId !=', 1);*/
        $this->db->order_by('skm.jadwal_survey', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
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

  