<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    class Admin_Modele extends CI_Model{
        
        function testLog($user, $mdp) {
            $req = "SELECT * FROM admin where email = %s and mdp = %s";
            $req  = sprintf($req, $this->db->escape($user), $this->db->escape(sha1($mdp)));
            $query = $this->db->query($req);
            $nombre = count($query->result_array());
            if($nombre == 0) {
                return 404;
            } else {
                $row = $query->row_array();
                return $row['id'];
            }
        }
    }
?>    
