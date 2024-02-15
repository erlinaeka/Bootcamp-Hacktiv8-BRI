<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryList = Category::all();
        $data = [
            'categoryList' => $categoryList,
        ];
        return view('pages.kategori.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name'     => 'required|unique:category',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category = Category::create([
            'category_name' => $request->category_name,
        ]);

        if($category){
            return redirect()->route('index-kategori')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('index-kategori')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::where('category_id', $id)->first();
        $data = [
            'category' => $category
        ];
        return view('pages.kategori.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'category_name'     => 'required|unique:category',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $category = Category::where('category_id', $id);
        $dataUpdate = [
            'category_name' => $request->category_name,
        ];
        $category->update($dataUpdate);
        return redirect()->route('index-kategori')->with(['success' => 'Data Berhasil Diupdate!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::where('category_id', $id);
        $category->delete();
        return redirect()->route('index-kategori')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
