<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Contenu_Controller_Back extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            if(!$this->session->has_userdata('idAdmin')){
                redirect(site_url('Welcome_Back'));
            }
        }

        public function Acceuil()
	{
		$data['vue']='Acceuil_Back.php';
		$this->load->view('Template_BackOffice',$data);
		
	}
    }
?>