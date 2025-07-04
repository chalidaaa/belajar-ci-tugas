<?php

namespace App\Controllers;

use App\Models\ProductCategoryModel;

class KategoriProdukController extends BaseController
{
    protected $product_category; 

    function __construct()
    {
        $this->product_category = new ProductCategoryModel();
    }

    public function index()
    {
        
        $product_category = $this->product_category->findAll();
        $data['product_category'] = $product_category;

        return view('v_kategoriproduk', $data);
    }
    public function create()
{

    $dataForm = [
        'name' => $this->request->getPost('kategori'),
        'description' => $this->request->getPost('deskripsi'),
    ];

    $this->product_category->insert($dataForm);

    return redirect('kategoriproduk')->with('success', 'Data Berhasil Ditambah');
} 

    public function edit($id)
{
    $dataProduk = $this->product_category->find($id);

    $dataForm = [
        'name' => $this->request->getPost('kategori'),
        'description' => $this->request->getPost('deskripsi'),
    ];

    $this->product_category->update($id, $dataForm);

    return redirect('kategoriproduk')->with('success', 'Data Berhasil Diubah');
}

    public function delete($id)
{
    $dataProduk = $this->product_category->find($id);

    $this->product_category->delete($id);

    return redirect('kategoriproduk')->with('success', 'Data Berhasil Dihapus');
}
}