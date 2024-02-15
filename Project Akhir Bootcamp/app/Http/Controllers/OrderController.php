<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index(){
        $orderItem = Order::where('order_user', Auth::user()->id)->get();
        $data = [
            'orderItem' => $orderItem
        ];
        return view('pages.order.index', $data);
    }
    public function checkout(){
        $orderItem = OrderItems::where('order_item_user', Auth::user()->id)->get();
        if($orderItem){
            $totalOrder = 0;
            foreach($orderItem as $order){
                $totalOrder += $order->order_item_subtotal;
                OrderItems::find($order->order_item_id)->delete();
            }

            $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
            $date = date('Ymd');        
            $orderInvoiceId = 'INV-' . $date . '-' . $randomString;
        
            $order = Order::create([
                'order_invoice_id'  => $orderInvoiceId,
                'order_user'        => Auth::user()->id,
                'order_total'       => $totalOrder,
                // 'order_date'        => date('d F Y'),
                'order_date'        => date('Y-m-d'),
                'order_status'      => 'pending'
            ]);

            if($order){
                return redirect()->route('index-order')->with(['success' => 'Produk Berhasil dicheckout']);
            }else{
                return redirect()->route('index-order')->with(['error' => 'Data Gagal Diupdate!']);
            }
        }else{
            return view('pages.order.index');
        }
    }
    public function editStatus(string $id){
        $order = Order::find($id);
        $data = [
            'order' => $order
        ];
        return view('pages.order.edit', $data);
    }
    public function prosesEditStatus(Request $request, string $id){
        $validator = Validator::make($request->all(), [
            'order_status'    => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $order = Order::find($id);
        $order->update([
            'order_status' => $request->order_status,
        ]);

        if($order){
            return redirect()->route('index-order')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('index-order')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
