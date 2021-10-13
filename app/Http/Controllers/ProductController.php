<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id = null)
    {
        $products = $id ? Product::find($id) : Product::get();

        $response       = [
            'status'    => 401,
            'message'   => 'Product not found',
        ];

        if (!$products)
        return $this->response($response);

        $response       = [
            'status'    => 200,
            'message'   => 'Success',
            'data'      => $products,
        ];

        return $this->response($response);
    }

    public function kotaAsc()
    {
        $products = Product::orderBy('kota')->get();

        $response       = [
            'status'    => 200,
            'message'   => 'Success',
            'data'      => $products,
        ];

        return $this->response($response);
    }

    public function hargaTertinggiPerKota()
    {
        $products = Product::orderBy('harga', 'desc')->groupBy('kota')->get();

        $response       = [
            'status'    => 200,
            'message'   => 'Success',
            'data'      => $products,
        ];

        return $this->response($response);
    }

    public function hargaTerendah()
    {
        $products = Product::orderBy('harga')->limit(1)->get();

        $response       = [
            'status'    => 200,
            'message'   => 'Success',
            'data'      => $products[0],
        ];

        return $this->response($response);
    }
}
