@extends('master')

@section('content')

@if ($errors->any())
<div class="alrt alert-danger">
    @foreach($errors->all() as $error )
    <div class="mb-2">{{$error}}</div>
</div>
        
    @endforeach
    
@endif

<div class="container mt-7">
    <div class="card">
        <div class="card-body">
            <form action="{{url('/account-add')}}" method="post">
                @csrf
                <label for="">اسم</label>
                <input class="form-control" type="text" name="name">
                   
                
                <div class="mb-3 mt-3">
                <label for="">تاريخ الميلاد</label>
                <input class="form-control" type="date" name="birthday">
                </div>

                <div class="mb-3 mt-3">
                <label for="">رقم الهاتف</label>
                <input class="form-control" type="integer" name="phone">
                </div>

                <div class="mb-3 mt-3">
                    <label for="">الرقم الوطني</label>
                <input type="integer" name="national_id">
                </div>

                <div class="mb-3 mt-3">
                <label for="">رقم جواز السفر</label>
                <input type="integer" name="passport_id">
                </div>


                <div class="mb-3 mt-3">
                <label for="">الجنسية </label>
                <input type="text" name="nationality">
                </div>

                <div class="mb-3 mt-3">
                <label for="">البلد </label>
                <input type="text" name="country">
                </div>

                <div class="mb-3 mt-3">
                <label for="">المدينة </label>
                <input type="integer" name="city">
                </div>

                <div class="mb-3 mt-3">
                <label for="">الحالة الاجتماعية </label>
                <input type="text" name="social_condition">
                </div>
                
                <div class="mb-3 mt-3">
                <label for="">المستوى العلمي</label>
                <select class="form-control mb-3" name="educational_level" id="">
                  <option value="1">موظف\ة</option>
                  <option value="2">طالب\ة</option>
                </select>
                </div>



                <button type="submit" class="btn btn-primary">متابعة</button>
            </form>
        </div>
    </div>
</div>

@endsection