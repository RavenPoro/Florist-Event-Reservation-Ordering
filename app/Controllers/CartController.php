<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CartModel;
use App\Models\ProductModel;

class CartController extends BaseController
{
    public function __construct()
    {
        helper('array');
        
    }

    public function addtocart()
    {
        $cart = new CartModel();
        $id = $this->request->getVar('id');
        $product_name = $this->request->getVar('product_name');
        $price = $this->request->getVar('price');
        $data = [
            'id' => $id,
            'product_name' => $product_name,
            'price' => $price,
            'quantity' => 1,
            'status' => 'added'
        ];
        $cart->save($data);
    }
}