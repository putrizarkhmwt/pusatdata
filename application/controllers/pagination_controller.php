<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once 'basecontroller.php';
class Pagination_Controller extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model("pagination_model");
        $this->load->library("pagination");
    }

    public function example1() {
        $config = array();
        $config["base_url"] = $this->config->base_url()."pagination_controller/example1";
        $config["total_rows"] = $this->pagination_model->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->pagination_model->fetch_countries($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view("pagination_view", $data);
    }
}
?>

