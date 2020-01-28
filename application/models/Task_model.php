<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
    }

    public function getAllData()
    {
        $query = $this->db->query('SELECT id, name, description, DATE_FORMAT(date, "%d/%m/%Y") AS dateTask, checked FROM tasks');
        return $query->result();
    }

    public function getData($id)
    {
        $query = $this->db->query('SELECT id, name, description, date AS dateTask, checked FROM tasks WHERE `id` = ' . $id);
        return $query->row();
    }
    
    public function createDate($data)
    {
        $this->db->insert('tasks', $data);
    }

    public function updateData($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tasks', $data);
    }

    public function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tasks');
    }

}
