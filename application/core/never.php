<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of add_edit_children_model
 *
 * @author DEF
 */

class MY_Model extends CI_Model {
	public $DBuser;

	public $User;

	public $db_name;

	public function __construct() {
		if (!$this -> ion_auth -> logged_in()) {
			redirect('auth/login', 'refresh');
		} else {
			parent::__construct();
			//pulls the user identity from session
			$this -> User = $this -> ion_auth -> user() -> row();
			$this -> db_name = $this -> User -> db_name;

			//connects to the kidcares_user_data database the TRUE param forces ci to return the DB connection object
			$this -> DBuser = $this -> load -> database('user_data', TRUE);

		}
	}
}