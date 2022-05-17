<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    class Contenu_Modele extends CI_Model{

        public function liste_Contenu($id){
            $req = "SELECT * FROM contenuDetails where idCategorie=".$id;
            $query= $this->db->query($req);

            return $query->result_array();
        
        }

        public function liste_ContenuById($id){
            $req = "SELECT * FROM contenuDetails where id=".$id;
            $query= $this->db->query($req);

            return $query->result_array();
        
        }

        public function liste_Categ(){
            $req = "SELECT * FROM categorie";
            $query= $this->db->query($req);

            return $query->result_array();
        
        }
    }
?>