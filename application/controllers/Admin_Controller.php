<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {
    

    public function checkLog(){
		$user = $_GET['email'];
        $mdp = $_GET['mdp'];
        $this->load->model("Admin_Modele");
        $data['return'] = $this->Admin_Modele->testLog($user, $mdp);
        if($data['return']==404) {
            $data['warning1'] = "<h4>Email ou mot de passe incorrect</h4>";
            $this->load->view('Welcome_Back',$data);
        } else {
            $this->session->set_userdata('idAdmin',$data['return']);
            $data['vue'] = "Acceuil_Back.php";
            $this->load->view('Template_BackOffice',$data);
        }
	}
}
?>