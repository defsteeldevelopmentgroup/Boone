<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of nav_bar
 *
 * @author DEF
 */
class Nav_bar extends MX_Controller{
    
	public $string;
	
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
		$this -> load -> helper('url');
		$this -> string = uri_string();
        
        }
	
	public function index(){

		switch ($this->string) {
            case '':
                $this->load->view('public_nav_bar_view');
                break;
			case 'public/market':
				$this->load->view('public_nav_bar_view');
				break;
			
			default:
				$this->load->view('non_scroll_spy_nav_bar');
				break;
		}
	/*	
	$data['active'] = array(0 => 'NULL',
	1 => 'NULL',
	2 => 'NULL',
	3 => 'NULL',
	4 => 'NULL',
	5 => 'NULL',
	6 => 'NULL',
	7 => 'NULL',
	8 => 'NULL');
	
		$segments = explode('/', $this -> string);
		
		$count = count($segments);
		
		if($count === 1){
			/*
			 * 0 public/
			 */
			//$data['active'][0] = 'active';
		/*	switch($segments['0']){
				/*
				 * 1 public/market/
				 * 4 public/cart/
				 */
				 
			/*	case '#home':
					$data['active'][1] = 'active';
					break;
				case '#info':
					$data['active'][2] = 'active';
					break;
				case '#contact':
					$data['active'][3] = 'active';
					break;
				case '#register':
					$data['active'][4] = 'active';
					break;
				default:
						break;
			}
		}
		elseif($count === 3){
			switch($segments['2']){
				/*
				 * 2 public/market/about/
				 * 3 public/market/contact/
				 */
			/*	case 'about':
				$data['active'][2] = 'active';
					break;
				case 'contact':
				$data['active'][3] = 'active';
					break;
				default:
					break;
			}
		}
		else{
			switch($segments['1']){
				/*
				 * 1 public/market/
				 * 4 public/cart/
				 */
				 
			/*	case 'market':
					$data['active'][1] = 'active';
					break;
				case 'cart':
					$data['active'][4] = 'active';
					break;
				default:
						break;
			}
		}
		*/
        //$this->load->view('public_nav_bar_view');
	}
}
//end of file nav_bar
