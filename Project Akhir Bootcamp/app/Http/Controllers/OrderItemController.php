<?php

namespace App\Http\Controllers;

use App\Models\OrderItems;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderItemList = OrderItems::where('order_item_user', Auth::user()->id)->get();
        $data = [
            'orderItemList' => $orderItemList,
        ];
        return view('pages.orderItem.index', $data);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listProduct = Products::all();
        $data = [
            'listProducts' => $listProduct,
        ];
        return view('pages.orderItem.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_item_product'    => 'required',
            'order_item_qty'        => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product_price = Products::where('product_id', $request->order_item_product)->first();;
        // $orderItem_qty = $request->order_item_qty;
        // $orderItem_subtotal = intval($orderItem_qty) * intval($product_price); 
        $orderItem = OrderItems::create([
            'order_item_product'    => $request->order_item_product,
            'order_item_qty'        => $request->order_item_qty,
            'order_item_subtotal'   => $request->order_item_qty * $product_price->product_price,
            'order_item_user'       => Auth::user()->id
        ]);

        if($orderItem){
            return redirect()->route('index-order-item')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('index-order-item')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $orderItem = OrderItems::find($id);
        $listProduct = Products::all();
        $data = [
            'orderItem' => $orderItem,
            'listProducts'  => $listProduct,
        ];
        return view('pages.orderItem.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'order_item_product'    => 'required',
            'order_item_qty'        => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product_price = Products::where('product_id', $request->order_item_product)->first();
        $orderItem = OrderItems::find($id);
        $dataUpdate = [
            'order_item_product'    => $request->order_item_product,
            'order_item_qty'        => $request->order_item_qty,
            'order_item_subtotal'   => $request->order_item_qty * $product_price->product_price,
            'order_item_user'       => Auth::user()->id
        ];
        $orderItem->update($dataUpdate);
        if($orderItem){
            return redirect()->route('index-order-item')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('index-order-item')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $orderItem = OrderItems::find($id);
        $orderItem->delete();
        return redirect()->route('index-order-item')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
