@extends('layouts.back')
@section('contents')
<div class="container">
    <form action="{{route('storeuser')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-10 mb-10">
            <h5 class="solid">Nama User</h5>
            <input class="form-control form-control-solid" name="name" type="text" required>
        </div>
        <div class="col-md-10 mb-10">
            <h5 class="solid">Email</h5>
            <input class="form-control form-control-solid" name="email" type="email" required>
        </div>
        <div class="col-md-10 mb-10">
        <h5 class="solid">Password</h5>
        <input class="form-control form-control-solid" name="password" type="password" autocomplete="new-password" required>
        </div>
        <div class="col-md-10 mb-10">
        <h5 class="solid">Current Password</h5>
        <input class="form-control form-control-solid" name="password_confirmation" type="password" autocomplete="new-password" required>
        <div class="col-md-10 mb-10">
            <button type="submit" class="btn btn-light-success">Tambah User</button>
        </div>
    </div>
</form>
</div>
@endsection