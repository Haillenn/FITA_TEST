@extends('user.master')
@section('title', 'Đề thi')
{{-- main content --}}
@section('main-content')
    <div class="container">
        <div class="text-center">
            <h2>Cảm ơn bạn đã hoàn thành bài kiểm tra!</h2>
            <h1 style="color: red">Điểm: {{$mark}} </h1>
            <a href="/user/exam" class="btn btn-info">Quay lại trang đề thi</a>
        </div>
    </div>
@endsection
