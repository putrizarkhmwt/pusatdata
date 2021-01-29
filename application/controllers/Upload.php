<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    /*require_once 'basecontroller.php';*/
    require APPPATH . '/libraries/BaseController.php';
    class Upload extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('upload_model','',true);
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library("pagination");
        $this->load->model('user_model');
        $this->isLoggedIn();
    }

    public function index()
    {   
        $this->global['pageTitle'] = 'RUTILAHU : Upload';
        $data['upload'] = Upload_Model::findAll();
        
        $this->loadViews("upload", $this->global, $data , NULL);
    }
   /* public function tambahData(){
        if(count($_POST)>0){
            $data=$this->input->post();
            if(isset($data['id_upload'])){
                $upload = Upload_Model::findOne($data['id_upload']);
            }
            else
                $upload = new Upload_Model();
                $upload -> image = $upload->_uploadImage();
                $upload -> upload_ket = $data['upload_ket'];
                $upload -> save();
            //redirect('upload');
        }
    }*/
    public function add()
    {
        $upload = $this->upload_model;
        $upload->savegmb();
        /*redirect('upload');*/
    }

    public function edit($id="")
    {
        $upload = $this->upload_model;
        $upload->updategmb();

        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'RUTILAHU : Edit Upload';
            $data['upload'] = Upload_Model::findOne($id);
            $this->loadViews("edit_upload", $this->global, $data , NULL);
        }
        else{
            redirect('upload');
        }
    }
    /*public function edit($id=""){
        if(count($_POST)>0){
        //var_dump(count($_POST));die();
            $data=$this->input->post();
            $data_upload = $this->db->query('SELECT * FROM upload')->result_array();
            
            if(isset($data['id_upload'])){
                $upload = Upload_Model::findOne($data['id_upload']);
            }
            else{
                $upload = new Upload_Model();
            }
                $upload -> image = $this->_uploadImage();
                $upload -> upload_ket = $data['upload_ket'];
            $upload -> save();
            redirect('upload');
        }
    
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'RUTILAHU : Edit Upload';
            $data['upload'] = Upload_Model::findOne($id);
            $this->loadViews("edit_upload", $this->global, $data , NULL);
        }
        else{
            redirect('upload');
        }
    }*/

    public function detail($id=""){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'RUTILAHU : Detail Upload';
            $data['upload'] = Upload_Model::findOne($id);
            $this->loadViews("detail_upload", $this->global, $data , NULL);
        }
        else{
            redirect('upload');
        }
    }
    
    public function delete($id=""){
        if($id!="" && isset($id)){
            $upload = Upload_Model::remove($id);
            $this->_deleteImage($id);
        }
        redirect('upload');
        }

    function pageNotFound()
    {
        $this->global['pageTitle'] = 'RUTILAHU : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }

    }
?>