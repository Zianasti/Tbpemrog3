<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_Model extends CI_Model{
    private $_table = 'users';

    public function login($username, $password)
    {
        $this->db->from($this->_table);

        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function register($data)
    {
        $this->db->insert('employees', [
            'employee_id' => '',
            'name' => $data['name'],
            'dob' => $data['dob'],
            'gender' => $data['gender'],
            'email' => $data['email']
        ]);

        $newEmployeeId = $this->db->insert_id();

        $this->db->insert($this->_table, [
            'user_id' => '',
            'username' => $data['username'],
            'password' => $data['password'],
            'employee_id' => $newEmployeeId,
        ]);
        $query = $this->db->affected_rows();
        return $query;
    }
}