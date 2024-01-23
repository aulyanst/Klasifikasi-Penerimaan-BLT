<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TestingModel;

class Testing extends BaseController
{
    public function index()
    {

        //mengambil data dari database
        $testing = new TestingModel();
        $data['testings'] = $testing->findAll();
        return view('testing/index', $data);
    }
    public function create()
    {
        helper('form');
        return view('testing/create');
    }
    public function store()
    {
        //proses simpan data
        $rule = [
            'testingnama' => 'required|min_length[3]|max_length[255]',
            'testingumur' => 'required|integer',
            'testingjenis_bangunan' => 'required|min_length[3]|max_length[255]',
            'testingstatus_rumah' => 'required|min_length[3]|max_length[255]',
            'testingpekerjaan' => 'required|min_length[3]|max_length[255]',
            'testingpenghasilan' => 'required|integer',
            'testingstatus' => 'required|min_length[3]|max_length[255]',
        ];

        //validasi data
        if (!$this->validate($rule)) {
            session()->setFlashdata('error', 'Data tidak valid');
            return redirect()->route('admin/testing');
        }

        //jika data valid di simpan ke database
        $data = $this->request->getPost();
        $testing = new TestingModel();
        $testing->insert($data);
        //redirect ke halaman admin/testing
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->route('admin/training');
    }

    public function edit($id)
    {
        helper('form');
        $testing = new TestingModel();
        $data['testing'] = $testing->find($id);
        return view('testing/edit', $data);
    }
    public function update()
    {
        $rule = [
            'testingnama' => 'required|min_length[3]|max_length[255]',
            'testingumur' => 'required|integer',
            'testingjenis_bangunan' => 'required|min_length[3]|max_length[255]',
            'testingstatus_rumah' => 'required|min_length[3]|max_length[255]',
            'testingpekerjaan' => 'required|min_length[3]|max_length[255]',
            'testingpenghasilan' => 'required|integer',
            'testingstatus' => 'required|min_length[3]|max_length[255]',
        ];

        //validasi data
        if (!$this->validate($rule)) {
            session()->setFlashdata('error', 'Data tidak valid');
            return redirect()->route('admin//testing');
        }

        //jika data valid di simpan ke database
        $data = $this->request->getPost();
        $testing = new TestingModel();
        $testing->update($this->request->getPost('testing_id'), $data);
        //redirect ke halaman admin/testing
        session()->setFlashdata('success', 'Data berhasil diedit');
        return redirect()->route('admin/testing');
    }
    public function delete($id)
    {
        $testing = new TestingModel();
        $testing->delete($id);
        session()->setFlashdata('success', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('/admin/testing'));
    }
    public function find($id)
    {
    }
}
