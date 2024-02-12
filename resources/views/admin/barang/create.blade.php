@extends('layouts.back')
@section('contents')
<div class="container">
    <form action="{{route('storebarang')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-10 mb-10">
            <h5 class="solid">Kode Barang</h5>
            <input class="form-control form-control-solid" name="kode_barang" type="text">
        </div>
        <div class="col-md-10 mb-10">
            <h5 class="solid">Nama Barang</h5>
            <input class="form-control form-control-solid" name="nama_barang" type="text">
        </div>
        <div class="col-md-10 mb-10">
        <h5 class="solid">Satuan</h5>
        <select class="form-control form-control-solid" aria-label="Select example" name="satuan">
            <option value="PC">PC</option>
        </select>
        </div>
        <div class="col-md-10 mb-10">
            <h5 class="solid">QTY</h5>
            <input class="form-control form-control-solid" name="qty">
        </div>
        <div class="col-md-10 mb-10">
            <h5 class="solid">Harga Produk</h5>
            <input class="form-control form-control-solid" name="harga">
        </div>
        <div class="col-md-10 mb-10">
            <button type="submit" class="btn btn-light-success">Tambah Produk</button>
        </div>
    </div>
</form>
</div>
@endsection