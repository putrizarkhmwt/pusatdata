<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Monitor extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('validasi_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'PUSATDATA : Monitor';
        $data["salah_k"] = $this->validasi_model->errorK();
        $data["salah_s"] = $this->validasi_model->errorS();

        $this->loadViews("monitor", $this->global, $data , NULL);
        /*$this->load->view('dashboard',$data);*/
    }
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'PUSATDATA : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>