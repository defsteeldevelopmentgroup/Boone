<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Manage
 *
 * @author DEF
 */
class Nav_bar extends MX_Controller {

	public $string;
	
	

	public function __construct() {
		$this -> load -> helper('url');
		$this -> string = uri_string();
	}

	public function index() {
		//controls the active li in the navbar
		$data['active'] = array(0 => 'NULL',);
	
		
		
		$segments = explode('/', $this -> string);
		
		$count = count($segments);
		
		if($count === 1){
			
			
			switch ($segments['0']) {
					
				case 'manage':
					$data['active'][0] = 'active';
					break;
				
				default:
					
					break;
			}
			
		}else{
			switch($segments['1']){
				default:
					break;
			}
		}
        
        
		$this -> load -> view('nav_bar/bar', $data);
	}

}

