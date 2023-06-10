@extends('master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{url('/transfer-add')}}">تحويلات </a>
        </div>
    
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">المرسل</th>
                    <th> المستلم</th>
                    <th>القيمة </th>
                    <th>العملية </th>
                   
                  </tr>
                </thead>
                <tbody>
                  @foreach ($transfers as $transfer)
                      <tr>
                        <td>{{$transfer->id}}</td>
                        <td>{{$transfer->sender}}</td>
                        <td>{{$transfer->reciple}}</td>
                        <td>{{$transfer->value}}</td>
                        <td>{{$transfer->operationtype->name}}</td>
                       
                        
                      </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection