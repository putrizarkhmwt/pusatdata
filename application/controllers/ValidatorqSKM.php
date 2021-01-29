<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	require APPPATH . '/libraries/BaseController.php';

class ValidatorqSKM extends BaseController {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('validatorq_skm_model','',true);
        $this->load->model('validasi_skm_model','',true);
        $this->load->model('surveyor_model','',true);
		$this->load->model('user_model');
        $this->load->model('skm_model');
        $this->load->model('dokumentasi_skm_model');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->isLoggedIn();
	}

	public function index()
	{	
		$this->global['pageTitle'] = 'PUSAT DATA : Validasi Form Survey';
        $data['validator'] = Validatorq_Skm_Model::findAll();
		$config = array();
        $config["base_url"] = $this->config->base_url()."validatorq_skm/index";
        $config["total_rows"] = $this->validatorq_model->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["validatorq"] = $this->validatorq_model->fetch_data($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
		/*$this->load->view('validatorq',$data);*/
		$this->loadViews("validatorq_skm", $this->global, $data , NULL);
	}
	public function validasi($id="", $nik_rt="",$tgl=""){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSATDATA : Validasi';
            $data['validator'] = $this->validatorq_skm_model->validator($id, $tgl, $nik_rt);
            $data["survey"] = $this->surveyor_model->showS();
            $data["csurvey"] = $this->surveyor_model->countRowS();
            $data["mbr"] = $this->validatorq_skm_model->showVal();
            $kecamatan = $data['validator'][0]->kecamatan;
            $data['surveyor'] = $this->surveyor_model->showS();
            $this->loadViews("validasi_skm", $this->global, $data , NULL);
        }
        else{
            redirect('validatorqskm');
        }
    }
    public function validasiE($id="", $nik_rt="", $jadwal_survey=""){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSATDATA : Validasi';
            $data['valid'] = $this->validatorq_skm_model->validator($id, $jadwal_survey, $nik_rt);
            $data['listS'] = $this->validasi_skm_model->list($id, $jadwal_survey, $nik_rt);
            $data["survey"] = $this->surveyor_model->showS();
            $kecamatan = $data['valid'][0]->kecamatan;
            $data['surveyor'] = $this->surveyor_model->showS();
            $this->loadViews("edit_validasi_skm", $this->global, $data , NULL);
        }
        else{
            redirect('validatorq_skm');
        }
    }
    public function cek(){
        $kirim=$this->input->post();
        print_r($kirim);
    }
    public function input()
    {
        $data=$this->input->post();
        if(count($_POST)>0){
            $val = $this->validasi_skm_model;
            $val->menambah();

            $nik_skm = $data["nik_skm"];
            $tgl_survey = date('Y-m-d', strtotime($data["tgl_survey"]));
            $jadwal_survey = $data['jadwal_survey'];
            $nik_rt = $data['nik_rt'];

            //update skm
            $kriteria = "(nik = '".$nik_skm."' AND  jadwal_survey  = '".$jadwal_survey."' AND  nik_rt  = '".$nik_rt."')";
            $jadwal_survey = array(
                            'jadwal_survey' => $tgl_survey
                            );
            $this->skm_model->update_data('skm',$jadwal_survey,$kriteria);

            //update dokumentasi
            $dokumentasi = $this->dokumentasi_skm_model->showID($nik_skm, $jadwal_survey, $nik_rt);
            if(count($dokumentasi)>0){
                $kriteria = "(nik_skm = '".$nik_skm."' AND  tgl_survey  = '".$tgl_survey."' AND  nik_rt  = '".$nik_rt."')";
                $data = array(
                        'tgl_survey' => $tgl_survey
                        );
                $this->dokumentasi_skm_model->update_data('dokumentasi_skm',$data,$kriteria);
            }

        }
        redirect('validatorqskm/detail/'.$data['nik_skm'].'/'.$data['nik_rt'].'/'.$data['tgl_survey']);
    }
    public function edit($id="", $nik_rt="", $jadwal_survey="",$tgl_survey=""){
        if(count($_POST)>0){

            $data=$this->input->post();
            if(count($_POST)>0){
                $val = $this->validasi_skm_model;
                $val->edit($id,$tgl_survey, $nik_rt);

                $nik_skm = $data["nik_skm"];
                $tgl_survey = date('Y-m-d', strtotime($data["tgl_survey"]));
                $jadwal_survey = $data['jadwal_survey'];
                $nik_rt = $data['nik_rt'];

                //update skm
                $kriteria = "(nik = '".$nik_skm."' AND  jadwal_survey  = '".$jadwal_survey."' AND  nik_rt  = '".$nik_rt."')";
                $data = array(
                                'jadwal_survey' => $tgl_survey
                                );
                $this->skm_model->update_data('skm',$data,$kriteria);

                //update dokumentasi
                $dokumentasi = $this->dokumentasi_skm_model->showID($nik_skm, $jadwal_survey, $nik_rt);
                //return var_dump($dokumentasi);
                if(count($dokumentasi)>0){
                    $kriteria = "(nik_skm = '".$nik_skm."' AND  tgl_survey  = '".$jadwal_survey."' AND  nik_rt  = '".$nik_rt."')";
                    $data = array(
                            'tgl_survey' => $tgl_survey
                            );
                    $this->dokumentasi_skm_model->update_data('dokumentasi_skm',$data,$kriteria);
                }
            }

            redirect('validatorqskm/detail/'.$nik_skm.'/'.$nik_rt.'/'.$tgl_survey);
        }
        else{
            redirect('validatorqskm/detail/'.$data['nik_skm'].'/'.$data['nik_rt'].'/'.$data['tgl_survey']);
        }
    }
	public function tambah(){
        if(count($_POST)>0){
            $data=$this->input->post();
            if(isset($data['id_mbr'])){
                $validasi = Validasi_Model::findOne($data['id_mbr']);
            }
            else
                $validasi = new Validasi_Model();
                $validasi -> id_mbr = $data['id_mbr'];
                $validasi -> val_id = $data['val_id'];
                $validasi -> val_status = $data['val_status'];
                $validasi -> ket = $data['ket'];
                $validasi -> surveyor_id = $data['surveyor_id'];
                $validasi -> catatan = $data['catatan'];
                $validasi -> gabung = $data['gabung'];
                $validasi -> save();
            redirect('validatorqskm/detail/'.$data['id_mbr']);
        }
    }
    public function tambahData(){
        if(count($_POST)>0){
            $data=$this->input->post();
            if(isset($data['id_mbr'])){
                $validasi = Validasi_Model::findOne($data['id_mbr']);
            }
            else
                $validasi = new Validasi_Model();
                $validasi -> id_mbr = $data['id_mbr'];
                $validasi -> ket = $data['ket'];
                $validasi -> catatan = $data['catatan'];
                $validasi -> surveyor_id = $data['surveyor_id'];
                $validasi -> val_id = $data['val_id'];
                $validasi -> val_status = $data['val_status'];
                $validasi -> save();
            redirect('validatorqskm/detail/'.$data['id_mbr']);
        }
    }
    public function detail($id="", $nik_rt="", $jadwal_survey=""){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSATDATA : Detail Data Validasi';
            /*$data['validator'] = $this->validatorq_model->valval($id);*/
            $data['validator'] = $this->validatorq_skm_model->validator($id, $jadwal_survey, $nik_rt);
            $data['banding_dokumentasi'] = $this->dokumentasi_skm_model->bandingDokumentasi($id, $jadwal_survey, $nik_rt);
            $data['banding'] = $this->validatorq_skm_model->banding($id, $jadwal_survey, $nik_rt);
            $data['dokumentasi_skm'] = $this->dokumentasi_skm_model->showID($id,$jadwal_survey,$nik_rt);
            $data['validasi'] = $this->validasi_skm_model->showID($id,$jadwal_survey,$nik_rt);
            $data['valval'] = $this->user_model->showU();
            $data['listS'] = $this->validasi_skm_model->list($id, $jadwal_survey, $nik_rt);
            $this->loadViews("detail_validator_skm", $this->global, $data , NULL);
        }
        else{
            redirect('validatorskm/validatorListing');
        }
    }
    public function delete($id="", $nik_rt="", $jadwal_survey=""){
        if($id!="" && isset($id)){
            $val = $this->validasi_skm_model;
            $val->delete($id,$jadwal_survey, $nik_rt);
        }
        redirect('validatorqskm/detail/'.$id.'/'.$nik_rt.'/'.$jadwal_survey);
    }
	function valListing()
    {
            $this->load->model('validatorq_skm_model');
        
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;
            
            /*$this->load->library('pagination');*/
            
            $count = $this->validatorq_skm_model->valListingCount($searchText);

            /*$returns = $this->paginationCompress ( "valListing/", $count, 10 );*/
            
            /*$data['userRecords'] = $this->validatorq_model->valListing($searchText, $returns["page"], $returns["segment"]);*/
            
            $this->global['pageTitle'] = 'PUSATDATA : Validasi';
            
            $this->loadViews("validatorq_skm", $this->global, $data, NULL);
        }
	}
?>