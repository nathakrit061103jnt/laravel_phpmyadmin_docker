@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-5 mb-3 text-primary">
                <h2>เเสดงข้อมูลสินค้า <hr></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary mt-5" href="{{ route('products.index') }}"> กลับ</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ชื่อสินค้า: </strong>
                <span class="text-info">{{ $product->p_name }}</span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ราคาสินค้า: </strong>
                <span class="text-info">{{ $product->p_price }} บาท</span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>จำนวนนับสินค้า: </strong>
                <span class="text-info">{{ $product->p_unit_count }}</span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>รหัสคลังสินค้า: </strong>
                <span class="text-info">{{ $product->p_id_warehouse }}</span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>รหัสผู้ผลิต: </strong>
                <span class="text-info">{{ $product->p_id_manufacturer }}</span>
            </div>
        </div>
    </div>
@endsection
