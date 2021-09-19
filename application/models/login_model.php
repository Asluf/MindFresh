<?php 
class login_model extends CI_MODEL {
    public function verifyuser($data)
    {
        $email1 = htmlspecialchars($data['UserEmail']);
        $email = str_replace(array("#", "'", ";"," "), '', $email1);

        $passsowrd1 = htmlspecialchars($data['UserPassword']);
        $passsowrd = str_replace(array(";"," "), '', $passsowrd1);
        
        $query = $this->db->get_where('login_vieww', array('Email' =>$email, 'Password' => md5(sha1(md5($passsowrd)))));
        return $query->result_array();

    }
}