<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contenu_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function liste_Contenu()
	{
        $id = $_GET['id'];
        $this->load->model("Contenu_Modele");
		$liste = $this->Contenu_Modele->liste_Contenu($id);
		$data['listeCateg'] = $this->Contenu_Modele->liste_Categ();
		$data['liste'] = $liste;
		$data['vue']='Liste_Contenu.php';
		$this->load->view('Template',$data);
		
	}
	
	public function liste_ContenuById($id)
	{
        $this->load->model("Contenu_Modele");
		$liste = $this->Contenu_Modele->liste_ContenuById($id);
		$data['listeCateg'] = $this->Contenu_Modele->liste_Categ();
		$data['liste'] = $liste;
		$data['vue']='Liste_ContenuById.php';
		$this->load->view('Template',$data);
		
	}
		
}
