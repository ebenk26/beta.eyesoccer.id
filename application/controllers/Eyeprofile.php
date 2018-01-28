<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eyeprofile extends CI_Controller {

	public function __construct(){
        parent::__construct();
		   // $this->load->model('Eyemarket_model');
			date_default_timezone_set('Asia/Jakarta');
			$this->load->model('Eyeprofile_model');
			$this->load->model('Home_model');
			$this->load->helper(array('form','url','text','date'));
			$this->load->helper('my');
    }
	
	public function index()
	{
		$data["meta"]["title"]="";
		$data["meta"]["image"]=base_url()."/assets/img/tab_icon.png";
		$data["meta"]["description"]="Website dan Social Media khusus sepakbola terkeren dan terlengkap dengan data base seluruh stakeholders sepakbola Indonesia";		
		$data["page"]="eyeprofile";		
		
		$data['club_header'] = $this->Eyeprofile_model->get_club_header();
		$data['club_main'] = $this->Eyeprofile_model->get_club_main();
		$data['profile_club'] = $this->Eyeprofile_model->get_profile_club();
		$data['jumlah_klub'] = $this->Eyeprofile_model->get_jumlah_klub();
		$data['jumlah_pemain'] = $this->Eyeprofile_model->get_jumlah_pemain();
		$data['pemain_asing'] = $this->Eyeprofile_model->get_pemain_asing();
		$data['klasemen'] = $this->Eyeprofile_model->get_klasemen();
		$data['transfer_pemain'] = $this->Eyeprofile_model->get_transfer_pemain();
		$data['pencetak_gol'] = $this->Eyeprofile_model->get_pencetak_gol();
		$data['kompetisi'] = $this->Eyeprofile_model->get_kompetisi();

		$data['kanal'] 				= "home";
		$data["body"]=$this->load->view('eyeprofile/index', $data,true);
		$this->load->view('template/static',$data);
	}	
	
	public function klub($liga=null)
	{
		if($liga==null){
			$liga = "Liga%20Indonesia%201";
		}
		//$this->load->view('eyeprofile/klub');
		$data["meta"]["title"]="";
		$data["meta"]["image"]=base_url()."/assets/img/tab_icon.png";
		$data["meta"]["description"]="Website dan Social Media khusus sepakbola terkeren dan terlengkap dengan data base seluruh stakeholders sepakbola Indonesia";		
		$data["page"]="eyeprofile";	
		$jml_klub = null;
		$nama_liga = urldecode($liga);
		$data["title_liga"] = $nama_liga;
		if($nama_liga == 'Liga Indonesia 1'){
			$jml_klub = 18;	
		}else if($nama_liga == 'Liga Indonesia 2'){
			$nama_liga = 'Liga Indonesia 2';
			$jml_klub = 24;
			$data["title_liga"] = $nama_liga;
		}
		// $data['club_header'] = $this->Eyeprofile_model->get_club_header();
		$data['club_main'] = $this->Eyeprofile_model->get_club_liga($nama_liga,$jml_klub);
		// $data['profile_club'] = $this->Eyeprofile_model->get_profile_club();
		$data['get_jadwal_tomorrow_1'] = $this->Eyeprofile_model->get_jadwal_tomorrow_1();
		$data['get_jadwal_tomorrow_2'] = $this->Eyeprofile_model->get_jadwal_tomorrow_2();
		$data['get_jadwal_tomorrow_3'] = $this->Eyeprofile_model->get_jadwal_tomorrow_3();
		// $data['jumlah_klub'] = $this->Eyeprofile_model->get_jumlah_klub();
		// $data['jumlah_pemain'] = $this->Eyeprofile_model->get_jumlah_pemain();
		// $data['pemain_asing'] = $this->Eyeprofile_model->get_pemain_asing();
		// $data['klasemen'] = $this->Eyeprofile_model->get_klasemen();
		$data['transfer_pemain'] = $this->Eyeprofile_model->get_transfer_pemain();
		$data['pencetak_gol'] = $this->Eyeprofile_model->get_pencetak_gol();
		// $data['kompetisi_pro'] = $this->Eyeprofile_model->get_kompetisi_pro();		
		$data['get_all_kompetisi'] = $this->Eyeprofile_model->get_all_kompetisi();		
		$data['get_player_liga'] = $this->Eyeprofile_model->get_player_liga($nama_liga,'indonesia');		
		$data['get_player_liga_strange'] = $this->Eyeprofile_model->get_player_liga_strange($nama_liga);		
		
		$data['kanal'] 				= "home";
		$data["body"]=$this->load->view('eyeprofile/klub', $data, true);
		$this->load->view('template/static',$data);		
	}

	public function klub_pemain()
	{
		//$this->load->view('eyeprofile/klub_pemain');
		$data["meta"]["title"]="";
		$data["meta"]["image"]=base_url()."/assets/img/tab_icon.png";
		$data["meta"]["description"]="Website dan Social Media khusus sepakbola terkeren dan terlengkap dengan data base seluruh stakeholders sepakbola Indonesia";		
		$data["page"]="eyeprofile";		
		
		$data['club_header'] = $this->Eyeprofile_model->get_club_header();
		$data['club_main'] = $this->Eyeprofile_model->get_club_main();
		$data['profile_club'] = $this->Eyeprofile_model->get_profile_club();
		$data['jumlah_klub'] = $this->Eyeprofile_model->get_jumlah_klub();
		$data['jumlah_pemain'] = $this->Eyeprofile_model->get_jumlah_pemain();
		$data['pemain_asing'] = $this->Eyeprofile_model->get_pemain_asing();
		$data['klasemen'] = $this->Eyeprofile_model->get_klasemen();
		$data['transfer_pemain'] = $this->Eyeprofile_model->get_transfer_pemain();
		$data['pencetak_gol'] = $this->Eyeprofile_model->get_pencetak_gol();
		$data['kompetisi'] = $this->Eyeprofile_model->get_kompetisi();
		
		$data['klub_pemain'] = $this->Eyeprofile_model->get_klub_pemain();
		$data['pemain_klub'] = $this->Eyeprofile_model->get_pemain_klub();
		$data['jadwal_pertandingan'] = $this->Eyeprofile_model->get_jadwal_pertandingan();
		// $data['eyemarket_main'] = $this->Eyeprofile_model->get_eyemarket_main();
		$data['products']	= $this->Home_model->get_all_product();
		
		$data['kanal'] 				= "home";
		$data["body"]=$this->load->view('eyeprofile/klub_pemain', $data, true);
		$this->load->view('template/static',$data);		
	}	
	
	public function klub_offisial()
	{
		//$this->load->view('eyeprofile/klub_offisial');
		$data["meta"]["title"]="";
		$data["meta"]["image"]=base_url()."/assets/img/tab_icon.png";
		$data["meta"]["description"]="Website dan Social Media khusus sepakbola terkeren dan terlengkap dengan data base seluruh stakeholders sepakbola Indonesia";		
		$data["page"]="eyeprofile";		

		$data['club_header'] = $this->Eyeprofile_model->get_club_header();
		$data['club_main'] = $this->Eyeprofile_model->get_club_main();
		$data['profile_club'] = $this->Eyeprofile_model->get_profile_club();
		$data['jumlah_klub'] = $this->Eyeprofile_model->get_jumlah_klub();
		$data['jumlah_pemain'] = $this->Eyeprofile_model->get_jumlah_pemain();
		$data['pemain_asing'] = $this->Eyeprofile_model->get_pemain_asing();
		$data['klasemen'] = $this->Eyeprofile_model->get_klasemen();
		$data['transfer_pemain'] = $this->Eyeprofile_model->get_transfer_pemain();
		$data['pencetak_gol'] = $this->Eyeprofile_model->get_pencetak_gol();
		$data['kompetisi'] = $this->Eyeprofile_model->get_kompetisi();
		$data['klub_official'] = $this->Eyeprofile_model->get_klub_official();
		$data['official_klub'] = $this->Eyeprofile_model->get_official_klub();
		
		$data['kanal'] 				= "home";
		$data["body"]=$this->load->view('eyeprofile/klub_offisial', $data, true);
		$this->load->view('template/static',$data);		
	}	
	
	public function klub_detail($url=''){
		if($url=="")
		{
			redirect("eyeprofile/klub/Liga Indonesia 1");			
		}
		$data["meta"]["title"]="";
		$data["meta"]["image"]=base_url()."/assets/img/tab_icon.png";
		$data["meta"]["description"]="Website dan Social Media khusus sepakbola terkeren dan terlengkap dengan data base seluruh stakeholders sepakbola Indonesia";
		
		$data['get_klub_detail'] = $this->Eyeprofile_model->get_klub_detail($url);
		$data['get_klub_detail_row_array'] = $this->Eyeprofile_model->get_klub_detail_row_array($url);
		$data['get_official_list'] = $this->Eyeprofile_model->get_official_list($data['get_klub_detail_row_array']['club_id']);	
		$data['get_player_list'] = $this->Eyeprofile_model->get_player_list($data['get_klub_detail_row_array']['club_id']);	
		$data['get_hasil_klub'] = $this->Eyeprofile_model->get_hasil_klub($data['get_klub_detail_row_array']['name']);	
		$data['get_manager'] = $this->Eyeprofile_model->get_manager($data['get_klub_detail_row_array']['club_id']);	
		$data['get_pelatih'] = $this->Eyeprofile_model->get_pelatih($data['get_klub_detail_row_array']['club_id']);	
		$data['products']	= $this->Home_model->get_all_product();	
		$data['kanal'] 				= "home";
		$this->load->view('config-session',$data);
		$data["body"]=$this->load->view('eyeprofile/klub_pemain', $data, true);
		$this->load->view('template/static',$data);
	}	
	
	public function pemain($liga=null)
	{
		if($liga==null){
			$liga = "Liga%20Indonesia%201";
		}
		//$this->load->view('eyeprofile/pemain');
		$data["meta"]["title"]="";
		$data["meta"]["image"]=base_url()."/assets/img/tab_icon.png";
		$data["meta"]["description"]="Website dan Social Media khusus sepakbola terkeren dan terlengkap dengan data base seluruh stakeholders sepakbola Indonesia";		
		$data["page"]="eyeprofile";		
		
		if(urldecode($liga) == 'Liga Indonesia 1'){
			$nama_liga = 'Liga Indonesia 1';
			$jml_klub = 18;	
			$data["title_liga"] = $nama_liga;
		}else if(urldecode($liga) == 'Liga Indonesia 2'){
			$nama_liga = 'Liga Indonesia 2';
			$jml_klub = 24;
			$data["title_liga"] = $nama_liga;
		}else{
			$nama_liga = 'Liga Indonesia 3';
			$jml_klub = 32;
			$data["title_liga"] = $nama_liga;
		}
		
		$data['kompetisi_pro'] = $this->Eyeprofile_model->get_kompetisi_pro();
		$data['pemain_klub'] = $this->Eyeprofile_model->get_pemain_klub();

		$data['club_main'] = $this->Eyeprofile_model->get_club_liga($nama_liga,$jml_klub);
		$data['get_player_liga'] = $this->Eyeprofile_model->get_player_liga($nama_liga,'indonesia');
		$data['get_player_liga_strange'] = $this->Eyeprofile_model->get_player_liga_strange($nama_liga);		
		$data['kanal'] = "home";
		
		$data["body"]=$this->load->view('eyeprofile/pemain', $data, true);
		$this->load->view('template/static',$data);		
	}
	
	public function pemain_detail($id=''){
		if($id=="")
		{
			redirect("eyeprofile/pemain");			
		}
		//$pemain=$this->db->query("SELECT a.*,b.name as club_name,b.competition,b.logo FROM tbl_player a INNER JOIN tbl_club b ON b.club_id=a.club_id WHERE a.url='".$id."' LIMIT 1")->row_array();
		$data["meta"]["title"]="";
		$data["meta"]["image"]=base_url()."/assets/img/tab_icon.png";
		$data["meta"]["description"]="Website dan Social Media khusus sepakbola terkeren dan terlengkap dengan data base seluruh stakeholders sepakbola Indonesia";
		
		$data["page"]="eyeprofile";
		$data["pid"]=$id;

		$data['club_header'] = $this->Eyeprofile_model->get_club_header();
		$data['club_main'] = $this->Eyeprofile_model->get_club_main();
		$data['profile_club'] = $this->Eyeprofile_model->get_profile_club();
		$data['jumlah_klub'] = $this->Eyeprofile_model->get_jumlah_klub();
		$data['jumlah_pemain'] = $this->Eyeprofile_model->get_jumlah_pemain();
		$data['pemain_asing'] = $this->Eyeprofile_model->get_pemain_asing();
		$data['klasemen'] = $this->Eyeprofile_model->get_klasemen();
		$data['transfer_pemain'] = $this->Eyeprofile_model->get_transfer_pemain();
		$data['pencetak_gol'] = $this->Eyeprofile_model->get_pencetak_gol();
		$data['kompetisi'] = $this->Eyeprofile_model->get_kompetisi();				
		$data['karir_player'] = $this->Eyeprofile_model->get_karir_player();				
		
		$data['kanal'] = "home";
		$this->load->view('config-session',$data);
		$data["body"]=$this->load->view('eyeprofile/pemain_detail', $data, true);
		$this->load->view('template/static',$data);		
	}

	public function official($liga=null)
	{
		if($liga==null){
			$liga = "Liga%20Indonesia%201";
		}
		if(urldecode($liga) == 'Liga Indonesia 1'){
			$nama_liga = 'Liga Indonesia 1';
			$jml_klub = 18;	
			$data["title_liga"] = $nama_liga;
		}else if(urldecode($liga) == 'Liga Indonesia 2'){
			$nama_liga = 'Liga Indonesia 2';
			$jml_klub = 24;
			$data["title_liga"] = $nama_liga;
		}else{
			$nama_liga = 'Liga Indonesia 3';
			$jml_klub = 32;
			$data["title_liga"] = $nama_liga;
		}
		
		$data['kompetisi_pro'] = $this->Eyeprofile_model->get_kompetisi_pro();
		$data['pemain_klub'] = $this->Eyeprofile_model->get_pemain_klub();

		$data['club_main'] = $this->Eyeprofile_model->get_club_liga($nama_liga,$jml_klub);
		$data['get_player_liga'] = $this->Eyeprofile_model->get_player_liga($nama_liga,'indonesia');
		$data['get_player_liga_strange'] = $this->Eyeprofile_model->get_player_liga_strange($nama_liga);		
		$data['kanal'] = "home";
		
		$data['kanal'] = "home";
		$data["body"]=$this->load->view('eyeprofile/official', $data, true);
		$this->load->view('template/static',$data);		
	}	

	public function official_detail($id=null,$action=null){
		if($id=="")
		{
			redirect("eyeprofile/official_detail");
			
		}			
		$data["meta"]["title"]="";
		$data["meta"]["image"]=base_url()."/assets/img/tab_icon.png";
		$data["meta"]["description"]="Website dan Social Media khusus sepakbola terkeren dan terlengkap dengan data base seluruh stakeholders sepakbola Indonesia";

		$data["page"]="eyeprofile";
		$data["id"]=$id;
		$data["action"]=$action;
		
		$data['kanal'] = "home";
		$this->load->view('config-session',$data);
		$data["body"]=$this->load->view('eyeprofile/official_detail', $data, true);
		$this->load->view('template/static',$data);
	}
	
	public function supporter($liga=null)
	{
		if($liga==null){
			$liga = "Liga%20Indonesia%201";
		}
		if(urldecode($liga) == 'Liga Indonesia 1'){
			$nama_liga = 'Liga Indonesia 1';
			$jml_klub = 18;	
			$data["title_liga"] = $nama_liga;
		}else if(urldecode($liga) == 'Liga Indonesia 2'){
			$nama_liga = 'Liga Indonesia 2';
			$jml_klub = 24;
			$data["title_liga"] = $nama_liga;
		}else{
			$nama_liga = 'Liga Indonesia 3';
			$jml_klub = 32;
			$data["title_liga"] = $nama_liga;
		}
		
		$data['kompetisi_pro'] = $this->Eyeprofile_model->get_kompetisi_pro();
		$data['pemain_klub'] = $this->Eyeprofile_model->get_pemain_klub();

		$data['club_main'] = $this->Eyeprofile_model->get_club_liga($nama_liga,$jml_klub);
		$data['get_player_liga'] = $this->Eyeprofile_model->get_player_liga($nama_liga,'indonesia');
		$data['get_player_liga_strange'] = $this->Eyeprofile_model->get_player_liga_strange($nama_liga);		
		$data['kanal'] = "home";
		$data["body"]=$this->load->view('eyeprofile/supporter', $data, true);
		$this->load->view('template/static',$data);		
	}	
	
	public function referee($liga=null)
	{
		if($liga==null){
			$liga = "Liga%20Indonesia%201";
		}
		if(urldecode($liga) == 'Liga Indonesia 1'){
			$nama_liga = 'Liga Indonesia 1';
			$jml_klub = 18;	
			$data["title_liga"] = $nama_liga;
		}else if(urldecode($liga) == 'Liga Indonesia 2'){
			$nama_liga = 'Liga Indonesia 2';
			$jml_klub = 24;
			$data["title_liga"] = $nama_liga;
		}else{
			$nama_liga = 'Liga Indonesia 3';
			$jml_klub = 32;
			$data["title_liga"] = $nama_liga;
		}
		
		$data['kompetisi_pro'] = $this->Eyeprofile_model->get_kompetisi_pro();
		$data['pemain_klub'] = $this->Eyeprofile_model->get_pemain_klub();

		$data['club_main'] = $this->Eyeprofile_model->get_club_liga($nama_liga,$jml_klub);
		$data['get_player_liga'] = $this->Eyeprofile_model->get_player_liga($nama_liga,'indonesia');
		$data['get_player_liga_strange'] = $this->Eyeprofile_model->get_player_liga_strange($nama_liga);		
		$data['kanal'] = "home";
		$data["body"]=$this->load->view('eyeprofile/referee', $data, true);
		$this->load->view('template/static',$data);		
	}
	
	public function get_list_pemain($liga){
		$requestData= $_REQUEST;
		$res = $this->Eyeprofile_model->get_list_pemain($requestData,urldecode($liga));
		return $res;
	}
	
	public function get_list_official($liga){
		$requestData= $_REQUEST;
		$res = $this->Eyeprofile_model->get_list_official($requestData,urldecode($liga));
		return $res;
	}
}
