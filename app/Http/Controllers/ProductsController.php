<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function all()
    {
        return Products::all();
    }

    public function store(Request $request)
    {
        return Products::create($request->post());
    }


    public function getById($id)
    {
        return Products::where('id', $id)->get();
    }

    public function getByBarcode($barcode)
    {
        return Products::where('barcode', $barcode)->get();
    }

}
