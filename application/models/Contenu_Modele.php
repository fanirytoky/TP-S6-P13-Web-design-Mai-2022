<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    class Contenu_Modele extends CI_Model{

        public function liste_Contenu($id){
            $req = "SELECT c.id,cat.id as idCategorie,cat.nom as Categorie,c.nom as Nom,c.description as Description,c.photo as Photo,c.url as url FROM contenu c JOIN categorie cat on c.idCategorie=cat.id WHERE idCategorie=".$id;
            $query= $this->db->query($req);

            return $query->result_array();
        
        }

        public function liste_ContenuById($id){
            $req = "SELECT c.id,cat.id as idCategorie,cat.nom as Categorie,c.nom as Nom,c.description as Description,c.photo as Photo,c.url as url FROM contenu c JOIN categorie cat on c.idCategorie=cat.id where id=".$id;
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