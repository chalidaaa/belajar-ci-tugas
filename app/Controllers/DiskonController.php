<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Diskon;
use CodeIgniter\HTTP\ResponseInterface;

class DiskonController extends BaseController
{
    protected $diskon;

    function __construct(){
        $this->diskon = new Diskon();
    }
    public function index()
    {
        $diskon = $this->diskon->findAll();
        $data['diskons'] = $diskon;

        return view('v_diskon', $data);
    }
    public function create()
    {
        if (!$this->validate([
            'tanggal' => [
                'rules' => 'required|is_unique[diskon.tanggal]',
                'errors' => [
                    'required'  => 'Tanggal wajib diisi.',
                    'is_unique' => 'Tanggal sudah pernah digunakan.',
                ]
            ],
            'nominal' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Nominal wajib diisi.',
                    'numeric'  => 'Nominal harus berupa angka.',
                ]
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', $this->validator->getErrors());
        }

        $dataForm = [
            'tanggal' => $this->request->getPost('tanggal'),
            'nominal' => $this->request->getPost('nominal'),
        ];

        $this->diskon->insert($dataForm);

        return redirect('diskon')->with('success', 'Data Berhasil Ditambah');
        
    }
    public function edit($id)
    {
        if (!$this->validate([
            'tanggal' => [
                'rules' => 'required[diskon.tanggal]',
                'errors' => [
                    'required'  => 'Tanggal wajib diisi.',
                ]
            ],
            'nominal' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Nominal wajib diisi.',
                    'numeric'  => 'Nominal harus berupa angka.',
                ]
            ]
        ])) {
            return redirect()->back()->withInput()->with('failed', $this->validator->getErrors());
        }

        $dataForm = [
            'tanggal' => $this->request->getPost('tanggal'),
            'nominal' => $this->request->getPost('nominal'),
        ];

        $this->diskon->update($id, $dataForm);

        if ($this->diskon->update($id, $dataForm)) {
            return redirect('diskon')->with('success', 'Data Berhasil Diubah');
        } else {
            return redirect('diskon')->with('failed', 'Data Gagal Diubah');
        }
    }
        public function delete($id)
    {
        $dataProduk = $this->diskon->find($id);

        $this->diskon->delete($id);

        if ($this->diskon->delete($id)) {
            return redirect('diskon')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect('diskon')->with('failed', 'Data Gagal Dihapus');
        }
    }

}
