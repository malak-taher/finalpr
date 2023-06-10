@extends('master')

@section('content')

@if(session('failed'))
    {{session('failed')}}
@endif

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <form action="{{url('/entering')}}" method="post">
                @csrf
                
                <label for="">رقم الحساب</label>
                <input class="form-control mb-3" type="id" name="user_name">

                <label for="">كلمة المرور</label>
                <input class="form-control mb-3" type="password" name="password">
               
                {{-- <a class="btn btn-primary" href="home">فتح</a> --}}
                <button type="submit" class="btn btn-primary">فتح  </button>
                <a class="btn btn-primary" href="account-add">فتح حساب جديد</a>
            </form>
        </div>
    </div>
</div>

@endsection