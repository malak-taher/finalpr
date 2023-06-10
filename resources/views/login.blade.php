@extends('master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            
            <form action="{{url('/login')}}" method="post">
                @csrf
                
                
                <label for="">أسم المستخدم</label>
                <input class="form-control mb-3" type="user_name" name="user_name">

                <label for="">كلمة المرور</label>
                <input class="form-control mb-3" type="password" name="password">
               
                <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
                <a class="btn btn-primary" href="user-add"> إنشاء حساب جديد</a>
            </form>
        </div>
    </div>
</div>

@endsection