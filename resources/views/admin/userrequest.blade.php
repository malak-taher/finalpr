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


                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('userrequests.acceptance', ['id' => $userrequest->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success">قبول</button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-danger" href="{{route('userrequests.destroy', $userrequest->id)}}" onclick="event.preventDefault(); document.getElementById('delete-form-{{$userrequest->id}}').submit();">
                                        رفض
                                    </a>
                                    <form id="delete-form-{{$userrequest->id}}" action="{{route('userrequests.destroy', $userrequest->id)}}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </tr></td>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
