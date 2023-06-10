@extends('master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
          <div class="card-header">
            <a class="btn btn-primary" href="{{url('/userrequest')}}"> </a>
        </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">رقم لحساب</th>
                    <th scope="col">الطلبات</th>
                    <th scope="col">اختر</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($userrequests as $userrequest)
                      <tr>
                        <td>{{$userrequest->id}}</td>
                        <td>{{$userrequest->account_id}}</td>
                        <td>{{$userrequest->requests}}</td>
                        <td>>{{$userrequest->choose}}</td>
                          <td>

                            <a class="btn btn-danger" href="{{url('/userrequest-acceptance/'.$userrequest->id)}}">قبول</a>
                            <a class="btn btn-danger" href="{{url('/userrequest-delete/'.$userrequest->id)}}">رفض</a>
                        </tr></td>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection