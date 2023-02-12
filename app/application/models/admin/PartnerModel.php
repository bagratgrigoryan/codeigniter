<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PartnerModel extends CI_Model
{
	public function CreatePartner($data)
	{	if ($data['keyID'] == "TK"){
		$data['keyID'] = 1;
	}else $data['keyID'] = 2;
		return 	$this->db->insert('partners', $data);
	}

	public function getPartner()
	{
		$query = $this->db->get('partners');
		return $query->result();
	}
	public function getPartnerById($id)
	{
		$query = $this->db->get_where('partners', ['id' => $id]);
		$result = $query->row();
		if ($result->keyID == 1){
			$result->keyID = "TK";
		}else $result->keyID = "WL";
		return $result;
	}
	public function savePartner($data,$id)
	{

		if ($data['keyID'] == "TK"){
			$data['keyID'] = 1;
		}else $data['keyID'] = 2;
		var_dump($data);

		return $this->db->update('partners', $data, ['id' => $id]);
	}
}
