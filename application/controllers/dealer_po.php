<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dealer_po extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//call model inti 
		$this->load->model('initdata_model');
		$this->load->library('pagination');
		$this->load->model('dealer_model');
	}

	public function index()
	{
		if($this->session->userdata('is_logged_in')){
			$data['orderList'] =  $this->dealer_model->get_orderList($this->session->userdata('username'));
			$data['dealerInfo'] =  $this->dealer_model->get_dealerInfo($this->session->userdata('username'));
			
		}

		//header meta tag 
		$data['header'] = array('title' => 'สมาชิก dealer | '.$this->config->item('sitename'),
								'description' => 'สมาชิก dealer | '.$this->config->item('tagline'),
								'author' => $this->config->item('author'),
								'keyword' => 'สมาชิก dealer | '.$this->config->item('tagline') );
		//get menu database 
		$this->load->model('initdata_model');
		$data['menus_list'] = $this->initdata_model->get_menu();
		$data['menu_type'] = $this->initdata_model->get_type();
		$data['menu_brands'] = $this->initdata_model->get_brands();

        //content file view
		$data['content'] = 'dealer_po';
		// if have file script
		//$data['script_file']= "js/product_add_js";
		//load layout
		$this->load->view('template/layout', $data);
	}

	public function po_list()
	{
		if($this->session->userdata('is_logged_in')){
			$data['orderList'] =  $this->dealer_model->get_orderList($this->session->userdata('username'));
			$data['dealerInfo'] =  $this->dealer_model->get_dealerInfo($this->session->userdata('username'));
			
		}

		//header meta tag 
		$data['header'] = array('title' => 'สมาชิก dealer | '.$this->config->item('sitename'),
								'description' => 'สมาชิก dealer | '.$this->config->item('tagline'),
								'author' => $this->config->item('author'),
								'keyword' => 'สมาชิก dealer | '.$this->config->item('tagline') );
		//get menu database 
		$this->load->model('initdata_model');
		$data['menus_list'] = $this->initdata_model->get_menu();
		$data['menu_type'] = $this->initdata_model->get_type();
		$data['menu_brands'] = $this->initdata_model->get_brands();

        //content file view
		$data['content'] = 'dealer_po';
		// if have file script
		//$data['script_file']= "js/product_add_js";
		//load layout
		$this->load->view('template/layout', $data);
	}

	public function add($id)
	{
		if($this->session->userdata('is_logged_in')){
			$dealerInfo  =  $this->dealer_model->get_dealerInfo($this->session->userdata('username'));


			$sql =" SELECT * FROM po_cart WHERE member_id ='".$dealerInfo['id']."' AND product_id = '".$id."'";
			$re = $this->db->query($sql);
			$rowcount = $re->num_rows();
			if ($rowcount == 0) {
					$data = array(
				        'member_id' => $dealerInfo['id'],
				        'product_id' => $id,
				        'qty' => '1',
				        'price' => 0,
				        'total' => 0
				);

				$this->db->insert('po_cart', $data);
			}
			redirect('dealer_po','refresh');
		}
		else {
			redirect('dealer','refresh');
		}
	}


}

/* End of file dealer.php */
/* Location: ./application/controllers/dealer.php */