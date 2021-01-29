<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Cek extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('cek_model');
        $this->load->model('surveyor_model','',true);
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'PUSATDATA : CEK VALIDASI';

        $this->loadViews("cek", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the user list
     */
    function cekListing()
    {       
            $data["survey"] = $this->surveyor_model->showS();
            $data["csurvey"] = $this->surveyor_model->countRowS();
            $this->load->model('cek_model');

            $sur_id = $this->input->post('sur_id');
            $ket = $this->input->post('ket');
            $data['sur_id'] = $sur_id;
            $valid_id = $this->input->post('valid_id');
            $data['valid_id'] = $valid_id;
            $tglawal = $this->input->post('tglawal');
            //$tglawal = $tglawal.' 00:00:00';
            $data['tglawal'] = $tglawal;
            $tglakhir = $this->input->post('tglakhir');
            //$tglakhir = $tglakhir.' 23:59:59';
            $data['tglakhir'] = $tglakhir;
            if($tglawal == NULL && $tglakhir == NULL){
                $tglawal = date('Y-m-d');
                $tglakhir = date('Y-m-d');
            }else{
                $tglakhir = $this->input->post('tglakhir');
                $tglawal = $this->input->post('tglawal');
            }
            
            $this->load->library('pagination');
            
            $count = $this->cek_model->cekListingCount($sur_id, $ket, $valid_id, $tglawal, $tglakhir);
            $data['jumlahdata'] = $count;

            $returns = $this->paginationCompress ( "cekListing/", $count, 100 );
            
            $data['cekRecords'] = $this->cek_model->cekListing($sur_id, $ket, $valid_id, $tglawal, $tglakhir, $returns["page"], $returns["segment"]);
            $data['ket'] = $ket;
            
            $this->global['pageTitle'] = 'PUSATDATA : Cek Validasi';
            //return print_r($data['cekRecords']);

            $this->loadViews("cek", $this->global, $data, NULL);
    }

    function pageNotFound()
    {
        $this->global['pageTitle'] = 'PUSATDATA : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>