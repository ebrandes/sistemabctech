<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('date');
        $this->load->helper('url');
    }

    public function index()
	{
                $data['js'] = "";
                $data['css'] = "bemVindo.css";
                            $this->load->view('templates/header',$data);
		                    $this->load->view('bem_vindo');
                             $this->load->view('templates/footer');
	}
        
        
}
