<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Survey extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('survey_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    
    /**
     * This function is used to load the user list
     */
    function index()
    {
        $this->load->model('validator_model');
        
        $searchText = $this->input->post('searchText');
        $data['searchText'] = $searchText;

        $tglawal = $this->input->post('tglawal');
        //$tglawal = $tglawal.' 00:00:00';
        $data['tglawal'] = $tglawal;
        $tglakhir = $this->input->post('tglakhir');
        //$tglakhir = $tglakhir.' 23:59:59';
        $data['tglakhir'] = $tglakhir;
        // if($tglawal == NULL && $tglakhir == NULL){
        //     $tglawal = date('Y-m-d');
        //     $tglakhir = date('Y-m-d');
        // }else{
        //     $tglakhir = $this->input->post('tglakhir');
        //     $tglawal = $this->input->post('tglawal');
        // }
        
        $this->load->library('pagination');
        
        $count = $this->survey_model->countAll($tglawal,$tglakhir);

        $returns = $this->paginationCompress("survey/", $count, 100);
        
        $data['surveyRecords'] = $this->survey_model->showAll($tglawal,$tglakhir);
        
        $this->global['pageTitle'] = 'PUSATDATA : List Survey';

        $this->loadViews("rekap_survey", $this->global, $data, NULL);
    }

    public function export_excel(){
        $tglawal = $this->input->post('tglawal');
        //$tglawal = $tglawal.' 00:00:00';
        $data['tglawal'] = $tglawal;
        $tglakhir = $this->input->post('tglakhir');
        //$tglakhir = $tglakhir.' 23:59:59';
        $data['tglakhir'] = $tglakhir;
       $data = array( 'title' => 'LIST VALIDASI SURVEY ALL',
            'surveyRecords' => $this->survey_model->showAll($tglawal,$tglakhir));
       //return var_dump($data['surveyRecords']);
       $this->load->view('vw_laporan',$data);
  }

}