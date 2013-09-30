<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('date');
        $this->load->helper('url');
        $this->load->library('loadScript');
    }

    public function index()
	{
                            $data['css'] = "bemVindo.css";
                            $data['js'] = "bemVindo.js";
                            $this->load->view('templates/header',$data);
		$this->load->view('bem_vindo');
                             $this->load->view('templates/footer');
	}
        
        
}
