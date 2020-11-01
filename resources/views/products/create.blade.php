@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="p_name" class="form-control" placeholder="ชื่อสินค้า">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="p_price" class="form-control" placeholder="ราคาสินค้า">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Count:</strong>
                <input type="text" name="p_unit_count" class="form-control" placeholder="จำนวนสินค้า">
            </div>
        </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Warehouse ID:</strong>
                <input type="text" name="p_id_warehouse" class="form-control" placeholder="รหัสคลัง">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Manufacturer ID:</strong>
                <input type="text" name="p_id_manufacturer" class="form-control" placeholder="รหัสผู้ผลิต">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">บันทึกสินค้า</button>
        </div>
    </div>

</form>
@endsection
