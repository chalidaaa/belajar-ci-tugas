<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\TransactionDetailModel;
use App\Models\TransactionModel;

class Home extends BaseController
{
    protected $product;
    protected $transaction;
    protected $transactionDetail;

    function __construct(){
        helper('form');
        helper('number');
        $this->product = new ProductModel();
        $this->transaction = new TransactionModel();
        $this->transactionDetail = new TransactionDetailModel();
    }
    public function profile()
    {
        $username = session()->get('username');
        $data['username'] = $username;

        $buy = $this->transaction->where('username', $username)->findAll();
        $data['buy'] = $buy;

        $product = [];

        if (!empty($buy)) {
            foreach ($buy as $item) {
                $detail = $this->transactionDetail->select('transaction_detail.*, produks.name, produks.harga, produks.foto')->join('produks', 'transaction_detail.product_id=produks.id')->where('transaction_id', $item['id'])->findAll();

                if (!empty($detail)) {
                    $product[$item['id']] = $detail;
                }
            }
            
        }

        $data['product'] = $product;

        return view('v_profile', $data);
    }
    public function index(): string
    {
        $product = $this->product->findAll();
        $data['product'] = $product;

        return view('v_home', $data);
    }
}
