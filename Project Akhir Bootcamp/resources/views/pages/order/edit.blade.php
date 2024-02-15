@extends('layouts.main')

@section('judulpage','Edit Status Pesanan')
@section('judulkonten','Pesanan')


@section('isikonten')
<div class="col-12">
    <div class="card p-3">
        <form action="{{ route('proses-edit-status-order', $order->order_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="form-label" for="order_status">Status</label>
                <select class="form-control" name="order_status" id="order_status">
                    <option value="pending" {{ old('order_status')||$order->order_status == 'pending' ? 'selected' : ''}}>Pending</option>
                    <option value="paid" {{ old('order_status')||$order->order_status == 'paid' ? 'selected' : ''}}>Paid</option>
                    <option value="delivered" {{ old('order_status')||$order->order_status == 'delivered' ? 'selected' : ''}}>Delivered</option>
                    <option value="done" {{ old('order_status')||$order->order_status == 'done' ? 'selected' : ''}}>Done</option>
                </select>
                @error('order_status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
            <a href="{{ route('index-order') }}" class="btn btn-warning">Back</a>
        </form>
    </div>
</div>
@endsection