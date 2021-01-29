<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    /*require_once 'basecontroller.php';*/
    require APPPATH . '/libraries/BaseController.php';
    class Syarat extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('syarat_model','',true);
        $this->load->model('calon_model','',true);
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library("pagination");
        $this->load->model('user_model');
        $this->isLoggedIn();
    }

    public function index()
    {   
        $this->global['pageTitle'] = 'RUTILAHU : Syarat';
        $data['syarat'] = Syarat_Model::findAll();
        
        $this->loadViews("syarat", $this->global, $data , NULL);
    }
   /* public function tambahData(){
        if(count($_POST)>0){
            $data=$this->input->post();
            if(isset($data['id_syarat'])){
                $syarat = Syarat_Model::findOne($data['id_syarat']);
            }
            else
                $syarat = new Syarat_Model();
                $syarat -> image = $syarat->_syaratImage();
                $syarat -> syarat_ket = $data['syarat_ket'];
                $syarat -> save();
            //redirect('syarat');
        }
    }*/
    public function add()
    {
        $syarat = $this->syarat_model;
        $syarat->savegmb();
        redirect('syarat');
    }

    public function edit($id="")
    {
        $syarat = $this->syarat_model;
        $syarat->updategmb();

        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'RUTILAHU : Edit Syarat';
            $data['syarat'] = Syarat_Model::findOne($id);
            $this->loadViews("edit_syarat", $this->global, $data , NULL);
        }
        else{
            redirect('syarat');
        }
    }
    /*public function edit($id=""){
        if(count($_POST)>0){
        //var_dump(count($_POST));die();
            $data=$this->input->post();
            $data_syarat = $this->db->query('SELECT * FROM syarat')->result_array();
            
            if(isset($data['id_syarat'])){
                $syarat = Syarat_Model::findOne($data['id_syarat']);
            }
            else{
                $syarat = new Syarat_Model();
            }
                $syarat -> image = $this->_uploadImage();
                $syarat -> upload_ket = $data['upload_ket'];
            $syarat -> save();
            redirect('syarat');
        }
    
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'RUTILAHU : Edit Syarat';
            $data['syarat'] = Syarat_Model::findOne($id);
            $this->loadViews("edit_syarat", $this->global, $data , NULL);
        }
        else{
            redirect('syarat');
        }
    }*/

    public function detail($id=""){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'RUTILAHU : Detail Syarat';
            $data['syarat'] = Syarat_Model::findOne($id);
            $this->loadViews("detail_syarat", $this->global, $data , NULL);
        }
        else{
            redirect('syarat');
        }
    }
    
    public function delete($id=""){
        if($id!="" && isset($id)){
            $syarat = Syarat_Model::remove($id);
            $this->_deleteImage($id);
        }
        redirect('syarat');
        }

    function pageNotFound()
    {
        $this->global['pageTitle'] = 'RUTILAHU : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }

    }
?>