<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
class Dashboard extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('dashboard_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'PUSATDATA : Dashboard';
        $data["total_user"] = $this->dashboard_model->countRowU();
        $data["total_calon"] = $this->dashboard_model->countRowC();
        $data["total_mbr"] = $this->dashboard_model->countRowV();
        $this->loadViews("dashboard", $this->global, $data , NULL);
        /*$this->load->view('dashboard',$data);*/
    }
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'PUSATDATA : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>