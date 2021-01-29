<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    /*require_once 'basecontroller.php';*/
    require APPPATH . '/libraries/BaseController.php';
    class Calon extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('calon_model','',true);
        $this->load->model('syarat_model','',true);
        $this->load->model('kriteria_model','',true);
        $this->load->model('validator_model','',true);
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library("pagination");
        $this->load->model('user_model');
        $this->isLoggedIn();
    }

    public function index()
    {   
        $this->global['pageTitle'] = 'RUTILAHU : Calon';
        $data['calon'] = Calon_Model::findAll();
        /*$data['validator'] = Validator_Model::findAll();*/
        $this->loadViews("calon", $this->global, $data , NULL);
    }
    public function tambahData(){
        if(count($_POST)>0){
            $data=$this->input->post();
            if(isset($data['id_calon'])){
                $calon = Calon_Model::findOne($data['id_calon']);
            }
            else
                $calon = new Calon_Model();
                $calon -> calon_nik = $data['calon_nik'];
                $calon -> calon_nama = $data['calon_nama'];
                $calon -> calon_alamat = $data['calon_alamat'];
                $calon -> calon_kec = $data['calon_kec'];
                $calon -> calon_kel = $data['calon_kel'];
                $calon -> rt = $data['rt'];
                $calon -> rw = $data['rw'];
                $calon -> save();
            redirect('calon');
        }
    }

    public function edit($id=""){
        if(count($_POST)>0){
        //var_dump(count($_POST));die();
            $data=$this->input->post();
            $data_calon = $this->db->query('SELECT * FROM calon')->result_array();
            
            if(isset($data['id_calon'])){
                $calon = Calon_Model::findOne($data['id_calon']);
            }
            else{
                $calon = new Calon_Model();
            }
                $calon -> calon_nik = $data['calon_nik'];
                $calon -> calon_nama = $data['calon_nama'];
                $calon -> calon_alamat = $data['calon_alamat'];
                $calon -> calon_kec = $data['calon_kec'];
                $calon -> calon_kel = $data['calon_kel'];
                $calon -> rt = $data['rt'];
                $calon -> rw = $data['rw'];
            $calon -> save();
            redirect('calon');
        }
    
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'RUTILAHU : Edit Calon';
            $data['calon'] = Calon_Model::findOne($id);
            $this->loadViews("edit_calon", $this->global, $data , NULL);
        }
        else{
            redirect('calon');
        }
    }

    public function detail($id=""){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'RUTILAHU : Detail Calon';
            $data['calon'] = Calon_Model::findOne($id);
            $data['syarat'] = Syarat_Model::findOne($id);
            $data['kriteria'] = Kriteria_Model::findOne($id);
            $this->loadViews("detail_calon", $this->global, $data , NULL);
        }
        else{
            redirect('calon');
        }
    }
    
    public function delete($id=""){
        if($id!="" && isset($id)){
            $calon = Calon_Model::remove($id);
        }
        redirect('calon');
        }
    public function kriteriaq($id=""){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'RUTILAHU : Kriteria';
            $data['calon'] = Calon_Model::findOne($id);
            $this->loadViews("kriteriaq", $this->global, $data , NULL);
        }
        else{
            redirect('calon');
        }
    }
    public function syaratq($id=""){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'RUTILAHU : Syarat';
            $data['calon'] = Calon_Model::findOne($id);
            $this->loadViews("syaratq", $this->global, $data , NULL);
        }
        else{
            redirect('calon');
        }
    }

    function pageNotFound()
    {
        $this->global['pageTitle'] = 'RUTILAHU : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }

    }
?>