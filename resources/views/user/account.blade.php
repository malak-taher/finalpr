@extends('user.master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{url('/account-add')}}">حساب جديد</a>
        </div>
    
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">الأسم</th>
                    <th>تاريخ الميلاد</th>
                    <th>رقم الهاتف</th>
                    <th>الرقم الوطني</th>
                    <th>رقم جواز السفر</th>
                    <th>الجنسية</th>
                    <th>البلد</th>
                    <th>المدينة</th>
                    <th>الحالة الاجتماعية</th>
                    <th>المستوى العلمي</th>
                    <th>حالة الحساب </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($accounts as $account)
                      <tr>
                        <td>{{$account->id}}</td>
                        <td>{{$account->name}}</td>
                        <td>{{$account->birthday}}</td>
                        <td>{{$account->phone}}</td>
                        <td>{{$account->national_id}}</td>
                        <td>{{$account->passport_id}}</td>
                        <td>{{$account->nationality}}</td>
                        <td>{{$account->country}}</td>
                        <td>{{$account->city}}</td>
                        <td>{{$account->social_condition}}</td>
                        <td>{{$account->educationl_level}}</td>
                       <td> {{$account->status_of_account}}</td>
                        <td>
                          <a class="btn btn-success" href="{{url('/account-edit/'.$account->id)}}">تعديل</a>
                          <a class="btn btn-danger" href="{{url('/account-delete/'.$account->id)}}">حذف</a>
                      </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection