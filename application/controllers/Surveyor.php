<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    /*require_once 'basecontroller.php';*/
    require APPPATH . '/libraries/BaseController.php';
    class Surveyor extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('surveyor_model','',true);
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library("pagination");
        $this->load->model('user_model');
        $this->isLoggedIn();
    }

    public function index()
    {   
        
        $this->global['pageTitle'] = 'PUSAT DATA : SURVEYOR';
        $data['surveyor_data'] = Surveyor_Model::findAll();
        $this->loadViews("surveyor", $this->global, $data , NULL);
    }
    public function tambahData(){
        if(count($_POST)>0){
            $data=$this->input->post();
            if(isset($data['id_surveyor'])){
                $surveyor = Surveyor_Model::findOne($data['id_surveyor']);
            }
            else
                $surveyor = new Surveyor_Model();
                $surveyor -> username = $data['username'];
                $surveyor -> nama_surveyor = $data['nama_surveyor'];
                $surveyor -> dom_surveyor = $data['dom_surveyor'];
                $surveyor -> telp_surveyor = $data['telp_surveyor'];
                $surveyor -> kec = $data['kec'];
                $surveyor -> kel = $data['kel'];
                $surveyor -> status = $data['status'];
                $surveyor -> save();
            redirect('surveyor');
        }
    }

    public function edit($id=""){
        if(count($_POST)>0){
        //var_dump(count($_POST));die();
            $data=$this->input->post();
            $data_surveyor = $this->db->query('SELECT * FROM surveyor')->result_array();
            
            if(isset($data['id_surveyor'])){
                $surveyor = Surveyor_Model::findOne($data['id_surveyor']);
            }
            else{
                $surveyor = new Surveyor_Model();
            }
                $surveyor -> username = $data['username'];
                $surveyor -> nama_surveyor = $data['nama_surveyor'];
                $surveyor -> dom_surveyor = $data['dom_surveyor'];
                $surveyor -> telp_surveyor = $data['telp_surveyor'];
                $surveyor -> kec = $data['kec'];
                $surveyor -> kel = $data['kel'];
                $surveyor -> status = $data['status'];
                $surveyor -> save();
            redirect('surveyor');
        }
    
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSAT DATA : EDIT SURVEYOR';
            $data['surveyor'] = Surveyor_Model::findOne($id);
            $this->loadViews("edit_surveyor", $this->global, $data , NULL);
        }
        else{
            redirect('surveyor');
        }
    }

    public function detail($id=""){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'PUSAT DATA : DETAIL SURVEYOR';
            $data['surveyor'] = Surveyor_Model::findOne($id);
            $this->loadViews("detail_surveyor", $this->global, $data , NULL);
        }
        else{
            redirect('surveyor');
        }
    }
    
    public function delete($id=""){
        if($id!="" && isset($id)){
            $surveyor = Surveyor_Model::remove($id);
        }
        redirect('surveyor');
    }
    
    /*public function kriteriaq($id=""){
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
    }*/

    function pageNotFound()
    {
        $this->global['pageTitle'] = 'PUSAT DATA : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }

    }
?>