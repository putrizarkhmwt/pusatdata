<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	require APPPATH . '/libraries/BaseController.php';
	class Validatorq extends BaseController {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('validatorq_model','',true);
        $this->load->model('validasi_model','',true);
        $this->load->model('validasi_duplicate_model','',true);
        $this->load->model('surveyor_model','',true);
        $this->load->model('dokumentasi_mbr_model');
        $this->load->model('dokumentasi_skm_model');
		$this->load->model('user_model');
        $this->load->model('surveyor_model');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->isLoggedIn();
	}

	public function index()
	{	
		$this->global['pageTitle'] = 'PUSAT DATA : Validasi Form Survey';
        $data['validator'] = Validatorq_Model::findAll();
		$config = array();
        $config["base_url"] = $this->config->base_url()."validatorq/index";
        $config["total_rows"] = $this->validatorq_model->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["validatorq"] = $this->validatorq_model->fetch_data($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
		/*$this->load->view('validatorq',$data);*/
		$this->loadViews("validatorq", $this->global, $data , NULL);
	}
	public function validasi($id=""){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSATDATA : Validasi';
            $data['validator'] = Validatorq_Model::findOne($id);
            $data["survey"] = $this->surveyor_model->showS();
            $data["csurvey"] = $this->surveyor_model->countRowS();
            $data["mbr"] = $this->validatorq_model->showVal();
            $this->loadViews("validasi", $this->global, $data , NULL);
        }
        else{
            redirect('validatorq');
        }
    }
    public function validasiDuplicate($id=""){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSATDATA : Validasi';
            $data['validator'] = Validatorq_Model::findOne($id);
            $data["survey"] = $this->surveyor_model->showS();
            $data["csurvey"] = $this->surveyor_model->countRowS();
            $data["mbr"] = $this->validatorq_model->showVal();
            $this->loadViews("validasi_duplicate", $this->global, $data , NULL);
        }
        else{
            redirect('validatorq');
        }
    }
    public function validasiSKM($id=""){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSATDATA : Validasi';
            $data['validator'] = Validatorq_Model::findOne($id);
            $data["survey"] = $this->surveyor_model->showS();
            $data["csurvey"] = $this->surveyor_model->countRowS();
            $data["skm"] = $this->validatorq_model->showVal();
            $this->loadViews("validasi_skm", $this->global, $data , NULL);
        }
        else{
            redirect('validatorq');
        }
    }
    public function validasiE($id="", $number=" "){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSATDATA : Validasi';
            $data['valid'] = Validasi_Model::findOne($id);
            $data['listS'] = $this->validasi_model->list($id);
            $data["survey"] = $this->surveyor_model->showS();
            $this->loadViews("edit_validasi", $this->global, $data , NULL);
        }
        else{
            redirect('validatorq');
        }
    }
    public function validasiDuplicateE($id="", $number=" "){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSATDATA : Validasi';
            $data['valid'] = Validasi_Duplicate_Model::findOne($id);
            $data['listS'] = $this->validasi_duplicate_model->list($id);
            $data["survey"] = $this->surveyor_model->showS();
            $this->loadViews("edit_validasi_duplicate", $this->global, $data , NULL);
        }
        else{
            redirect('validatorq');
        }
    }
    public function validasiESKM($id="", $number=" "){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSATDATA : Validasi';
            $data['valid'] = Validasi_Model::findOne($id);
            $data['listS'] = $this->validasi_model->list($id);
            $data["survey"] = $this->surveyor_model->showS();
            $this->loadViews("edit_validasi_skm", $this->global, $data , NULL);
        }
        else{
            redirect('validatorq');
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
        $val = $this->validasi_model;
        $val->menambah();
        }
        redirect('validatorq/detail/'.$data['id_mbr']);
    }
    public function inputDuplicate()
    {
        $data=$this->input->post();
        if(count($_POST)>0){
        $val = $this->validasi_duplicate_model;
        $val->menambah();
        }
        redirect('validatorq/detail/'.$data['id_mbr']);
    }
    public function edit($id=""){
        if(count($_POST)>0){
            date_default_timezone_set('Asia/Jakarta');
            $date = date('Y-m-d');
            //var_dump(count($_POST));die();
            $data=$this->input->post();
            $data_validasi = $this->db->query('SELECT * FROM mbr2018')->result_array();
            
            if(isset($data['id_mbr'])){
                $validasi = Validasi_Model::findOne($data['id_mbr']);
            }
            else{
                $validasi = new Validasi_Model();
            }
                $validasi -> id_mbr = $data['id_mbr'];
                $validasi -> val_id = $data['val_id'];
                $validasi -> val_status = $data['val_status'];
                $validasi -> ket = $data['ket'];
                $validasi -> surveyor_id = $data['surveyor_id'];
                $validasi -> catatan = $data['catatan'];
                $validasi -> tgl_survey = date('Y-m-d', strtotime($data['tgl_survey']));
                $validasi -> update_tgl = date("Y-m-d H:i:s");
                $validasi -> save();
            $validasi -> save();
            redirect('validatorq/detail/'.$data['id_mbr']);
        }
        else{
            redirect('validatorq/detail/'.$data['id_mbr']);
        }
    }
    public function editDuplicate($id=""){
        if(count($_POST)>0){
            date_default_timezone_set('Asia/Jakarta');
            $date = date('Y-m-d');
            //var_dump(count($_POST));die();
            $data=$this->input->post();
            $data_validasi = $this->db->query('SELECT * FROM mbr2018')->result_array();
            
            if(isset($data['id_mbr'])){
                $validasi = Validasi_Duplicate_Model::findOne($data['id_mbr']);
            }
            else{
                $validasi = new Validasi_Duplicate_Model();
            }
                $validasi -> id_mbr = $data['id_mbr'];
                $validasi -> val_id = $data['val_id'];
                $validasi -> val_status = $data['val_status'];
                $validasi -> ket = $data['ket'];
                $validasi -> surveyor_id = $data['surveyor_id'];
                $validasi -> catatan = $data['catatan'];
                $validasi -> tgl_survey = date('Y-m-d', strtotime($data['tgl_survey']));
                $validasi -> update_tgl = date("Y-m-d H:i:s");
                $validasi -> save();
            $validasi -> save();
            redirect('validatorq/detail/'.$data['id_mbr']);
        }
        else{
            redirect('validatorq/detail/'.$data['id_mbr']);
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
            redirect('validatorq/detail/'.$data['id_mbr']);
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
            redirect('validatorq/detail/'.$data['id_mbr']);
        }
    }
    public function detail($id=""){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSATDATA : Detail Data Validasi';
            /*$data['validator'] = $this->validatorq_model->valval($id);*/
            $data['validator'] = Validatorq_Model::findOne($id);
            $data['banding_dokumentasi'] = Dokumentasi_Mbr_Model::findOne($id);
            $data['banding'] = Validasi_Model::findOne($id);
            $data['duplicate'] = Validasi_Duplicate_Model::findOne($id);

            $data['dokumentasi_mbr'] = $this->dokumentasi_mbr_model->showID($id);
            $data['validasi'] = $this->validasi_model->showID($id);
            $data['validasi_duplicate'] = $this->validasi_duplicate_model->showID($id);
            $data['valval'] = $this->user_model->showU();
            $data['listS'] = $this->validasi_model->list($id);
            $data['listduplicateS'] = $this->validasi_duplicate_model->list($id);
            $this->loadViews("detail_validator", $this->global, $data , NULL);
        }
        else{
            redirect('validator/validatorListing');
        }
    }
    public function delete($id=""){
        if($id!="" && isset($id)){
            $valid = Validasi_Model::remove($id);
        }
        redirect('validatorq/detail/'.$id);
    }
    public function deleteDuplicate($id=""){
        if($id!="" && isset($id)){
            $valid = Validasi_Duplicate_Model::remove($id);
        }
        redirect('validatorq/detail/'.$id);
    }
	function valListing()
    {
            $this->load->model('validatorq_model');
        
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;
            
            /*$this->load->library('pagination');*/
            
            $count = $this->validatorq_model->valListingCount($searchText);

            /*$returns = $this->paginationCompress ( "valListing/", $count, 10 );*/
            
            /*$data['userRecords'] = $this->validatorq_model->valListing($searchText, $returns["page"], $returns["segment"]);*/
            
            $this->global['pageTitle'] = 'PUSATDATA : Validasi';
            
            $this->loadViews("validatorq", $this->global, $data, NULL);
        }
	}
?>