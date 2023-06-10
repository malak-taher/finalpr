@extends('master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <form action="{{url('/statementaccount')}}" method="post">
                @csrf
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">ايداع</button>
                    <button type="button" class="btn btn-primary">خصم</button>
                    <button type="button" class="btn btn-primary">الكل</button>
                  </div>
                <div class="mb-3 mt-3">
                    <label for="">البدء من تاريخ</label>
                    <input class="form-control" type="date" name="birthday">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="">الى تاريخ </label>
                        <input class="form-control" type="date" name="birthday">
                        </div>

                        <button type="submit" class="btn btn-primary">طلب الان </button>
            </form>
        </div>
    </div>
</div>

@endsection             
        