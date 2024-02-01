@extends('layout.main');
@section('content')
{{--    @php(var_dump($products))--}}
{{--    @endphp--}}
    <table>
        <tr>
            <th>ID</th>
            <th>Ten</th>
            <th>Gia</th>
        </tr>
        @foreach($products as $value)
        <tr>
            <th>{{$value->id}}</th>
            <th>{{$value->tensanpham}}</th>
            <th>{{$value->gia}}</th>
        </tr>
        @endforeach
    </table>
    <h1>Chào mừng đến với bình nguyên vô tận</h1>
@endsection