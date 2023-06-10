@extends('master')

@section('content')


<div class="container mt-5">
    <div class="card">


<form class="row g-3" action="{{url('/transfer-add')}}" method="post">
   @csrf
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">المستلم</label>
      <input type="type" class="form-control" id="inputPassword4" name="reciple">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">القيمة</label>
      <input type="double" class="form-control" id="inputAddress" name="value">
    </div>
   
    
   
   
    <div class="col-12">
      <button type="submit" class="btn btn-primary"> تحويل</button>
    </div>
  </form>

  @endsection