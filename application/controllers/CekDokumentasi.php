<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class CekDokumentasi extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('cek_dokumentasi_model');
        $this->load->model('surveyor_model','',true);
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'PUSATDATA : CEK DOKUMENTASI';

        $this->loadViews("cek_dokumentasi", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the user list
     */
    function cekListing()
    {       
        $this->load->model('cek_dokumentasi_model');


        $sur_id = $this->session->userdata('userId');
        $tglawal = $this->input->post('tglawal');
        //$tglawal = $tglawal.' 00:00:00';
        $data['tglawal'] = $tglawal;
        $tglakhir = $this->input->post('tglakhir');
        //$tglakhir = $tglakhir.' 23:59:59';
        $data['tglakhir'] = $tglakhir;
        if($tglawal == NULL && $tglakhir == NULL){
            $tglawal = '0000-00-00';
            $tglakhir = '0000-00-00';
        }else{
            $tglakhir = $this->input->post('tglakhir');
            $tglawal = $this->input->post('tglawal');
        }
        
        $this->load->library('pagination');
        
        $count = $this->cek_dokumentasi_model->cekListingCount($sur_id, $tglawal, $tglakhir);
        $data['jumlahdata'] = $count;

        $returns = $this->paginationCompress ( "cekListing/", $count, 100 );
        
        $data['cekRecords'] = $this->cek_dokumentasi_model->cekListing($sur_id, $tglawal, $tglakhir, $returns["page"], $returns["segment"]);
        $this->global['pageTitle'] = 'PUSATDATA : Cek Validasi';
        //return print_r($data['cekRecords']);

        $this->loadViews("cek_dokumentasi", $this->global, $data, NULL);
    }

    function pageNotFound()
    {
        $this->global['pageTitle'] = 'PUSATDATA : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>