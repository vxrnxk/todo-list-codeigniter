<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TaskController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Task_model');
    }

    public function index()
	{
        $data['result'] = $this->Task_model->getAllData();

		$this->load->view('task_view', $data);
    }
    
    public function create()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'date' => $this->input->post('dateTask'),
            'checked' => false,
        );

        $this->Task_model->createDate($data);
        
        redirect('TaskController');
    }

    public function edit($id)
    {
        $data['row'] = $this->Task_model->getData($id);

        $this->load->view('task_edit', $data);
    }

    public function update($id)
    {
        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'date' => $this->input->post('dateTask'),
            'checked' => $this->input->post('checked')
        );
        
        $this->Task_model->updateData($id, $data);

        redirect('TaskController');
    }

    public function delete($id)
    {
        $this->Task_model->deleteData($id);

        redirect('TaskController');
    }
    
}
