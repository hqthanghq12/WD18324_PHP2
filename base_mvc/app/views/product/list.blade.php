@extends('layout.main');
@section('content')
{{--    @php(var_dump($products))--}}
{{--    @endphp--}}
<a href="{{route('add-product')}}">Thêm</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Ten</th>
            <th>Gia</th>
            <th>Thao tác</th>
        </tr>
        @foreach($products as $value)
        <tr>
            <th>{{$value->id}}</th>
            <th>{{$value->tensanpham}}</th>
            <th>{{$value->gia}}</th>
            <th>
                <a href="{{route('detail-product/'.$value->id)}}">Sửa</a>
            </th>
        </tr>
        @endforeach
    </table>
    <h1>Chào mừng đến với bình nguyên vô tận</h1>
@endsection