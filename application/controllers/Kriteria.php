<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    /*require_once 'basecontroller.php';*/
    require APPPATH . '/libraries/BaseController.php';
    class Kriteria extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kriteria_model','',true);
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library("pagination");
        $this->load->model('user_model');
        $this->isLoggedIn();
    }

    public function index()
    { 
        $this->global['pageTitle'] = 'RUTILAHU : Kriteria';
        $data['kriteria'] = Kriteria_Model::findAll();
        $this->loadViews("kriteria", $this->global, $data , NULL);
    }
    public function add()
    {
        $kriteria = $this->kriteria_model;
        $kriteria->savegmb();
        redirect('calon');
    }

    public function edit($id="")
    {
        $kriteria = $this->kriteria_model;
        $kriteria->updategmb();

        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'RUTILAHU : Edit Kriteria';
            $data['kriteria'] = Kriteria_Model::findOne($id);
            $this->loadViews("edit_kriteria", $this->global, $data , NULL);
        }
        else{
            redirect('kriteria');
        }
    }

    public function detail($id=""){
        if($id!="" && isset($id)){
            $this->global['pageTitle'] = 'RUTILAHU : Detail Kriteria';
            $data['kriteria'] = Kriteria_Model::findOne($id);
            $this->loadViews("detail_kriteria", $this->global, $data , NULL);
        }
        else{
            redirect('kriteria');
        }
    }
    
    public function delete($id=""){
        if($id!="" && isset($id)){
            $kriteria = Kriteria_Model::remove($id);
            $this->_deleteImage($id);
        }
        redirect('kriteria');
        }

    function pageNotFound()
    {
        $this->global['pageTitle'] = 'RUTILAHU : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }

    }
?>