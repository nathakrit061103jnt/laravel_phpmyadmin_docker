@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-5 mb-3 text-primary">
            <h2>เพิ่มสินค้าใหม่<hr></h2>
        </div>
        <div class="pull-right mt-5">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> กลับ</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>ไม่สามารถเพิ่มสินค้าได้!</strong> กรุณาตรวจสอบข้อมูลที่กรอก.<br><br>
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
                <strong>ชื่อสินค้า:</strong>
                <input type="text" name="p_name" class="form-control" placeholder="ชื่อสินค้า">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ราคาสินค้า:</strong>
                <input type="text" name="p_price" class="form-control" placeholder="ราคาสินค้า">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>จำนวนหน่วยนับ:</strong>
                <input type="text" name="p_unit_count" class="form-control" placeholder="จำนวนสินค้า">
            </div>
        </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>รหัสคลังสินค้า:</strong>
                <input type="text" name="p_id_warehouse" class="form-control" placeholder="รหัสคลัง">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>รหัสผู้ผลิต:</strong>
                <input type="text" name="p_id_manufacturer" class="form-control" placeholder="รหัสผู้ผลิต">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">บันทึกสินค้า</button>
        </div>
    </div>

</form>
@endsection
