<?php

namespace App\Controllers;

use App\Models\TamuModel;

class Tamu extends BaseController
{
    protected $tamuModel;

    public function __construct() {
        // parent::__construct();
        $this->tamuModel = new TamuModel();

        if(!session()->has('username')){
			return redirect()->to('/login');
		}
		//$data['username']  = session()->get('username');
    }

    public function index(){
        // $tamu_model = new TamuModel();
        // $all_data_tamu = $tamu_model->findAll();
        $all_data_tamu = $this->tamuModel->getTamu();
        return view('tamu',['all_data_tamu'=> $all_data_tamu]);
    }

    public function add_data_tamu(){
        return view('add_data_tamu');
    }

    public function proses_add_data_tamu(){
        // $item_model = new TamuModel();
        // $item_model->insert($this->request->getPost());
        $data = $this->request->getPost();
        $this->tamuModel->createTamu($data);
        return redirect()->to(base_url('tamu'));
    }

    public function edit_data_tamu($id = false){
        // $tamu_model = new TamuModel();
        // $data_tamu = $tamu_model->find($id);
        $data_tamu = $this->tamuModel->getTamu($id);
        return view('edit_data_tamu',['data_tamu'=> $data_tamu]);
    }

    public function proses_edit_data_tamu(){
        // $item_model = new TamuModel();
        // $item_model->update($this->request->getPost('id'), $this->request->getPost());
        $data = $this->request->getPost();
        $this->tamuModel->updateTamu($this->request->getPost('id'), $data);

        return redirect()->to(base_url('tamu'));
    }

    public function delete_data_tamu($id = false){
        // $tamu_model = new TamuModel();
        // $tamu_model->delete($id);
        $this->tamuModel->deleteTamu($id);
        return redirect()->to(base_url('tamu'));
    }
}