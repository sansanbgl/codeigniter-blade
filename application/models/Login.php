<?php

class Login extends Model
{
    public function login($data = array())
    {
        $query  = 'SELECT * FROM login where nama_id = ? LIMIT 1';
        $bind   = ['its'];
        $result = $this->db->query($query, $bind);
        return $result;
    }
    public function resetPassword()
    {

    }
    public function forgotPassword()
    {

    }
}
