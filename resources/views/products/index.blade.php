@extends('products.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-primary mb-3">
                <h1>ระบบหลังร้าน จัดการสินค้า<hr></h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> เพิ่มสินค้าใหม่</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ลำดับ</th>
            <th>ชื่อสินค้า</th>
            <th>ราคาสินค้า</th>
            <th>จำนวนนับสินค้า</th>
            <th>รหัสคลังสินค้า</th>
            <th>รหัสผู้ผลิต</th>
            <th width="280px">ดำเนินการ</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->p_name }}</td>
            <td>{{ $product->p_price }}</td>
            <td>{{ $product->p_unit_count }}</td>
            <td>{{ $product->p_id_warehouse }}</td>
            <td>{{ $product->p_id_manufacturer }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">



                        <a class="btn btn-info"  href="{{ route('products.show',$product->id) }}">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a class="btn btn-warning" href="{{ route('products.edit',$product->id) }}">
                            <i class="fas fa-edit"> </i>
                        </a>


                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"> </i></button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>
{{--
    <center>
        <h1>นายณัฐกฤต ทิศเสถียร BC602 60010912540</h1>
    </center> --}}

    {!! $products->links() !!}



@endsection
