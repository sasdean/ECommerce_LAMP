<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->output->enable_profiler();
	}
	public function index()
	{
		$this->load->model('products');
		$notes = $this->products->show_all();
		$data = $this->products->show_all_cat();
		$this->load->view('page2', array('notes' => $notes, 'data' => $data));
	}
	public function show_ind($id, $category_id)
	{
		$this->load->model('products');
		$data = $this->products->show_ind($id);
		$sims = $this->products->similar($category_id);
		$this->load->view('page5', array('data' => $data, 'sims' => $sims));
	}
	public function addtocart(){
		
		if(!$this->session->userdata('total')){
			$this->session->set_userdata('total',($this->input->post('select')));
		}
		else{$total=$this->session->userdata('total');
			$this->session->set_userdata('total', ($total+$this->input->post('select')));
		}

		if(!$this->session->userdata('cart')){

			$this->session->set_userdata('cart', array(array(
				'id' => $this->input->post('id'),
				'name' => $this->input->post('name'),
				'price' => $this->input->post('price'),
				'qty' => $this->input->post('select')),
				));
			$cart = $this->session->userdata('cart');
			//var_dump($cart);

		}	else{
				$cart = $this->session->userdata('cart');
				array_push($cart, array(
					'id' => $this->input->post('id'),
					'name' => $this->input->post('name'),
					'price' => $this->input->post('price'),
					'qty' => $this->input->post('select'),
					
				));
				$this->session->set_userdata('cart', $cart);
				//var_dump($cart);
			}
		$this->load->view('cart', array('cart'=>$cart));

		//var_dump($this->session->userdata('cart'));
		//var_dump($this->session->userdata('total'));
	}
	public function show_cart(){
		if($this->session->userdata('cart')){
			//var_dump($this->session->userdata('cart'), "cart"); //good data
			$cart = $this->session->userdata('cart');
			$this->load->view('cart', array('cart' => $cart));
		}
		else{ //empty cart - here
			/*$total = 0;
			$cart = $this->session->userdata;
			unset($cart);
			echo("Your shopping cart is empty");
		
			$this->load->model('products');
			$notes = $this->products->show_all();
			$data = $this->products->show_all_cat();
			$this->load->view('page2', array('notes' => $notes, 'data' => $data));*/
			
		}
	}
	public function show_one_cat($category_id){
		$this->load->model('products');
		$data = $this->products->show_one_cat($category_id);
		$this->load->view('categories', array('data' => $data));
	}
	public function deleteitem($arrayindex){
		
		$cart = $this->session->userdata('cart');
			//var_dump($cart);
		
		$getqty = $cart[$arrayindex]['qty'];
		$total = $this->session->userdata('total') - $getqty;

		$this->session->set_userdata('total', $total);

		unset($cart[$arrayindex]);

		$this->session->set_userdata('cart', $cart);
		
		$this->load->view('cart', array('cart' => $cart));
	}
	public function shipping(){
		$this->load->model('products');
		$data = array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'address2' => $this->input->post('address2'),
			'city' => $this->input->post('city'),
			'state' => $this->input->post('state'),
			'zip' => $this->input->post('zip'));	
		$this->load->view('checkout', array('data'=> $data));
	}
	public function billing(){
		$this->load->model('products');
		$data = array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'address2' => $this->input->post('address2'),
			'city' => $this->input->post('city'),
			'state' => $this->input->post('state'),
			'zip' => $this->input->post('zip'));	
		$this->load->view('checkout', array('data'=> $data));
	}
}