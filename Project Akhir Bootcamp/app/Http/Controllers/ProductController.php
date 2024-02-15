<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listProduct = Products::all();
        $data = [
            'listProduct' => $listProduct,
        ];
        return view('pages.produk.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listCategory = Category::all();
        $data = [
            'listCategory' => $listCategory
        ];
        return view('pages.produk.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name'     => 'required|unique:products',
            'product_status'   => 'required',
            'product_category' => 'required',
            'product_desc'     => 'required',
            'product_price'    => 'required',
            'product_weight'   => 'required',
            'product_img_url'  => 'required|image|mimes:png,jpg,jpeg|max:1024'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('product_img_url');
        $image->storeAs('public/product', $image->hashName());

        $product = Products::create([
            'product_name'      => $request->product_name,
            'product_status'    => $request->product_status,
            'category_id'       => $request->product_category,
            'product_desc'      => $request->product_desc,
            'product_price'     => $request->product_price,
            'product_weight'    => $request->product_weight,
            'product_img_url'   => $image->hashName(),
            'product_slug'      => Str::slug($request->product_name, '-')
        ]);

        if($product){
            return redirect()->route('index-produk')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('index-produk')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Products::find($id);
        $data = [
            'product' => $product
        ];
        return view('pages.produk.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Products::find($id);
        $listCategory = Category::all();
        $data = [
            'product' => $product,
            'listCategory' => $listCategory
        ];
        return view('pages.produk.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Products::find($id);

        $product_name_rule = $request->product_name == $product->product_name ?  'required' : 'required|unique:products';

        $validator = Validator::make($request->all(), [
            'product_name'     => $product_name_rule,
            'product_status'   => 'required',
            'product_category' => 'required',
            'product_desc'     => 'required',
            'product_price'    => 'required',
            'product_weight'   => 'required',
            'product_img_url'  => 'required|image|mimes:png,jpg,jpeg|max:1024',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // store image yang baru
        $image = $request->file('product_img_url');
        $image->storeAs('public/product', $image->hashName());

        // hapus image yang terdahulu
        Storage::delete('public/product/'. $product->product_img_url);

        // update data
        $product->update([
            'product_name'      => $request->product_name,
            'product_status'    => $request->product_status,
            'category_id'       => $request->product_category,
            'product_desc'      => $request->product_desc,
            'product_price'     => $request->product_price,
            'product_weight'    => $request->product_weight,
            'product_img_url'   => $image->hashName(),
            'product_slug'      => Str::slug($request->product_name, '-')
        ]);

        if($product){
            return redirect()->route('index-produk')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('index-produk')->with(['error' => 'Data Gagal Diupdate!']);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Products::find($id);
        Storage::delete('public/product/'. $product->product_img_url);
        $product->delete();
        if($product){
            return redirect()->route('index-produk')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('index-produk')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
