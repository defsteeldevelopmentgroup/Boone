<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Hmvc extends MX_Controller {
    
   public function header(){
       $this->load->view('hmvc_header');
	   //$this->output->enable_profiler(TRUE);
   }
   public function public_header(){
       $this->load->view('hmvc_public_header');
   }
   
   public function footer(){
   		if (!$this -> ion_auth -> logged_in()) {
   		    
   		    $this->load->view('footer_links_public_view');
            
		} else {
		    
		   	$this->load->view('footer_links_logged_in_view');
		   
        }
       $this->load->view('hmvc_footer');
   }
   
   public function index(  )
   {
      $this->load->view('hmvc_view');
   }
}
 
/* End of file hmvc.php */
/* Location: ./application/widgets/hmvc/controllers/hmvc.php */
