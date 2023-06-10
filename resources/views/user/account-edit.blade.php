@extends('master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <form action="{{url('/account-update/'.$account->id)}}" method="post">
                @csrf
                @method('put')
                <label for="">إسم </label>
                <input value="{{$account->name}}" class="form-control mt-1 mb-3" type="text" name="name">
                
                <label for="">تاريخ ميلاد  </label>
                <input value="{{$account->birthday}}" class="form-control mt-1 mb-3" type="date" name="birthday">

                <label for="">رقم الهاتف</label>
                <input value="{{$account->phone}}" class="form-control mt-1 mb-3" type="integer" name="phone">
               
                <label for="">الرقم الوطني </label>
                <input value="{{$account->national_id}}" class="form-control mt-1 mb-3" type="integer" name="national_id">
               
                <label for="">رقم جواز السفر</label>
                <input value="{{$account->passport_id}}" class="form-control mt-1 mb-3" type="integer" name="passport_id">
               
                <label for="">الجنسية</label>
                <input value="{{$account->nationality}}" class="form-control mt-1 mb-3" type="text" name="nationality">
               
                <label for="">البلد</label>
                <input value="{{$account->country}}" class="form-control mt-1 mb-3" type="text" name="country">
               
                <label for="">المدينة </label>
                <input value="{{$account->city}}" class="form-control mt-1 mb-3" type="text" name="city">
               
                <label for="">الحالةالاجتماعية </label>
                <input value="{{$account->social_condition}}" class="form-control mt-1 mb-3" type="text" name="social_condition">
               
                <label for="">المستوى العلمي</label>
                {{-- <input value="{{$account->educationl_level}}" class="form-control mt-1 mb-3" type="text" name="educationl_level"> --}}
                <select class="form-control mb-3" name="educational_level" id="">
                    <option value="1">موظف\ة</option>
                    <option value="2">طالب\ة</option>
                  </select>


                <label for="">حالة الحساب </label>
                {{-- <input value="{{$account->status_of_account}}" class="form-control mt-1 mb-3" type="text" name="status_of_account"> --}}
                <select class="form-control" name="statusofaccount_id" id="">
                    @foreach ($statusofaccounts as $statusofaccount)
                        <option value="{{$statusofaccount->id}}">{{$statusofaccount->name}}</option>
                    @endforeach
                </select>
               
                

                <button type="submit" class="btn btn-success">حفظ التعديلات</button>
            </form>
        </div>
    </div>
</div>

@endsection