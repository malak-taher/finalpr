@extends('master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
          <div class="card-header">
            <a class="btn btn-primary" href="{{url('/revealed')}}"> </a>
        </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">رقم لحساب</th>
                    <th scope="col">العملية</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($revealeds as $revealed)
                      <tr>
                        <td>{{$revealed->id}}</td>
                        <td>{{$revealed->account_id}}</td>
                        <td>{{$revealed->operation_id->name}}</td>
                       
                      </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection