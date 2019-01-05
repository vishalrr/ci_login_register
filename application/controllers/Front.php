<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Front extends CI_Controller {

  	public function __construct(){
        parent::__construct();        
        $this->load->library('session');  
        $this->load->helper('form');	
        $this->load->model('Common');  
		error_reporting(E_ALL & ~E_NOTICE);
		date_default_timezone_set('Asia/Kolkata');       

    }
    public function index()
	{
		$this->load->view('index');
	}
	public function brand()
	{
		$this->load->view('brand');
	}
	public function brand_specific_offer(){
    	$this->load->view('brand-specific-offer');
    }
    public function logged(){
    	$this->load->view('logged');
    }
	public function about()
	{
		$this->load->view('about-us');
	}
	public function influencers()
	{
		$this->load->view('influencers');
	}
	public function blog()
	{
		$this->load->view('blog');
	}
	public function Influencer_sigin()
	{
		$this->load->view('index_Influencer_sigin');
	}
	public function terms()
	{
		$this->load->view('terms');
	}
	public function privacy()
	{
		$this->load->view('terms');
	}
	public function Influencer_register()
	{
		$this->load->view('index_Influencer_register');
	}
	public function brand_register()
	{
		$this->load->view('index_brand_register');
	}
	public function blog_detail(){
		$this->load->view('blog-detail');
	}
	public function public_profile(){
		$this->load->view('public-profile');
	}
	public function pending_job(){
		$this->load->view('pending-job');
	}
	public function brand_sigin(){
		$this->load->view('index_brand_sigin');
	}
	
}
  