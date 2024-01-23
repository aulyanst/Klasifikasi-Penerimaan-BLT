<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TrainingModel;

class Training extends BaseController
{
    public function index()
    {
        
        //mengambil data dari database
        $training = new TrainingModel();
        $data['trainings'] = $training->findAll();
        return view('training/index', $data);
    }
    public function create()
    {
        helper('form');
        return view('training/create');
    }
    public function store()
    {
        //proses simpan data
        $rule = [
            'nama' => 'required|min_length[3]|max_length[255]',
            'umur' => 'required|integer',
            'jenis_bangunan' => 'required|min_length[3]|max_length[255]',
            'status_rumah' => 'required|min_length[3]|max_length[255]',
            'pekerjaan' => 'required|min_length[3]|max_length[255]',
            'penghasilan' => 'required|integer',
            'status' => 'required|min_length[3]|max_length[255]',
        ];

        //validasi data
        if (!$this->validate($rule)) {
            session()->setFlashdata('error', 'Data tidak valid');
            return redirect()->route('admin/training');
        }

        //jika data valid di simpan ke database
        $data = $this->request->getPost();
        $training = new TrainingModel();
        $training->insert($data);
        //redirect ke halaman admin/training
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->route('admin/training');
    }

    public function edit($id)
    {
        helper('form');
        $training = new TrainingModel();
        $data['training'] = $training->find($id);
        return view('training/edit', $data);
    }
    public function update()
    {
        $rule = [
            'nama' => 'required|min_length[3]|max_length[255]',
            'umur' => 'required|integer',
            'jenis_bangunan' => 'required|min_length[3]|max_length[255]',
            'status_rumah' => 'required|min_length[3]|max_length[255]',
            'pekerjaan' => 'required|min_length[3]|max_length[255]',
            'penghasilan' => 'required|integer',
            'status' => 'required|min_length[3]|max_length[255]',
        ];

        //validasi data
        if (!$this->validate($rule)) {
            session()->setFlashdata('error', 'Data tidak valid');
            return redirect()->route('admin//training');
        }

        //jika data valid di simpan ke database
        $data = $this->request->getPost();
        $training = new TrainingModel();
        $training->update($this->request->getPost('training_id'), $data);
        //redirect ke halaman admin/training
        session()->setFlashdata('success', 'Produk berhasil diedit');
        return redirect()->route('admin/training');
    }
    public function delete($id)
    {
        $training = new TrainingModel();
        $training->delete($id);
        session()->setFlashdata('success', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('/admin/training'));
    }
    public function find($id)
    {
    }
}
