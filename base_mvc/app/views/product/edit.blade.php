@extends('layout.main');
@section('content')
    @if(isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
        <span>{{$_SESSION['success']}}</span>
    @endif
    <form action="{{route('edit-product/'.$products->id)}}" method="post">
        <label>Tên</label>
        <input type="text" name="ten" value="{{$products->tensanpham}}">
        <label>Gia</label>
        <input type="text" name="gia" value="{{$products->gia}}">
        <input type="submit" name="gui" value="Gui">
    </form>
@endsection