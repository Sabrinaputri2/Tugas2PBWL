<?php

namespace App\Controllers;

use App\Core\Controller;

class Pelanggan extends Controller
{
public object $model;
public function __construct() {
    $this->model = new \App\Models\Pelanggan();
}
	public function index()
	{
        $data['rows'] = $this->model->tampil();
		$this->dashboard('pelanggan/index',$data);
	}
    public function input()
	{
        $data['data_user'] = $this->model->tampil_users();
        $data['data_gol'] = $this->model->tampil_gol();
		$this->dashboard('pelanggan/input',$data);
		
	}    
	public function simpan()
	{
		$this->model->simpan();
		header('location: ' . URL . '/pelanggan');

	}
	public function edit($id)
	{
		$data['row']= $this->model->edit($id);
		$data['data_user'] = $this->model->tampil_users();
        $data['data_gol'] = $this->model->tampil_gol();
		$this->dashboard('pelanggan/edit',$data);
	}
	public function update()
	{
		$this->model->update();
		header('location: ' . URL . '/pelanggan');
	}
	public function delete($id)
	{
		$this->model->delete($id);
		header('location: ' . URL . '/pelanggan');
	}
}
