@extends('master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <form action="{{url('/print')}}" method="post">
                @csrf
                <label for="">اسم</label>
                <input value="{{$account['name']}}" type="text" readonly>
                   
                
                <div class="mb-3 mt-3">
                <label for="">تاريخ الميلاد</label>
                <input value="{{$account['birthday']}}" type="text" readonly>
            
                <div class="mb-3 mt-3">
                <label for="">رقم الهاتف</label>
                <input value="{{$account['phone']}}"type="text" readonly>
               

                <div class="mb-3 mt-3">
                    <label for="">الرقم الوطني</label>
                    <input value="{{$account['national_id']}}" type="text" readonly>
                </div>
                
                <div class="mb-3 mt-3">
                <label for="">رقم جواز السفر</label>
                <input value="{{$account['passport_id']}}" type="text"readonly>
                </div>


                <div class="mb-3 mt-3">
                <label for="">الجنسية </label>
                <input value="{{$account['nationality']}}" type="text" readonly>
                </div>

                <div class="mb-3 mt-3">
                <label for="">البلد </label>
                <input value="{{$account['country']}}" type="text" readonly>
                </div>


                <div class="mb-3 mt-3">
                <label for="">المدينة </label>
                <input value="{{$account['city']}}" type="text" readonly>
                </div>


                <div class="mb-3 mt-3">
                <label for="">الحالة الاجتماعية </label>
                <input value="{{$account['social_condition']}}" type="text" readonly>

                
                </div>


                <div class="mb-3 mt-3">
                <label for="">المستوى العلمي</label>
                <input value="{{$account['educational_level']}}" type="text" readonly>
            
                
                </div>
                <div>
                    <ul>
                        <li>نموذج فتح الحساب</li>
                        <li>وثيقة الرقم الوطني</li>
                        <li>صورةملونة من اثبات الهوية"  جواز السفر"</li>
                    </ul>
                </div>



                <button type="button" onclick="print()" class="btn btn-primary">طباعة</button>
            </form>
        </div>
    </div>
</div>

@endsection