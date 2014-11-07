<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of rename
 *
 * @author DEF
 */
class payments extends MX_Controller{
    function index(){
    	if (!$this -> ion_auth -> logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
		$this->load->view('rename');
		}
    }
}
