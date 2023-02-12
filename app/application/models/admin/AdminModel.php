<?php

class AdminModel extends CI_Model
{
	public function create($data)
	{
		return 	$this->db->insert('users', $data);
	}

	public function read($data)
	{
		$query = $this->db->get_where('users',['email'=>$data['email']]);
		if ($query->num_rows()){
			$row = $query->row_array();
				if($row['password'] == md5($data['password'])){
					unset($row['password']);
					$this->_data = $row;
					return "ERROR_NONE";
				}
				return "INVALID_PASS";
		}else return "INVALID_USER";
	}

	public function get_data()
	{
		return $this->_data;
	}
}
