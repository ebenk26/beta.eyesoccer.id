<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactform extends CI_Controller {

	public function __construct(){
        parent::__construct();
		    //$this->load->model('Eyeticket_model');
			direct_m();
    }
	public function index()
	{	
		$data["meta"]["title"]="";
		$data["meta"]["image"]=base_url()."/assets/img/tab_icon.png";
		$data["meta"]["description"]="Website dan Social Media khusus sepakbola terkeren dan terlengkap dengan data base seluruh stakeholders sepakbola Indonesia";
		
		$cmd_ads=$this->db->query("select * from tbl_ads")->result_array();
		$i=0;
		foreach($cmd_ads as $ads){
		$e=0;
		foreach($ads as $key => $val)
		{
		$array[$i][$e] =  $val;
		$e++;
		}		
		$i++;
		}

		$data["array"]=$array;
		$data["body"]=$this->load->view('eyeticket/contact_form_view', '', true);
		$this->load->view('template-front-end',$data);
	}
	
}
