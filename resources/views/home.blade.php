@extends('user.master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <form action="{{url('/home')}}" method="post">
                @csrf
                <div class="d-grid gap-2">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    الاستفسار على الحساب
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">رصيدك</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{session()->get('info')->balans}}
        </div>
        <div class="modal-footer">
          <button type="butary" data-bs-dismiss="modal">اغلاق</button>
         
        </div>
      </div>
    </div>
  </div>



  
            
                <a class="btn btn-primary" href="statementaccount">كشف حساب</a>




               <!-- Button aa modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
   طلب دفتر صكوك
  </button>
  
  <!--  aa Modal -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="exampleModalLabel">اطلب </h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{url('/admin.userrequest')}}" method="post">
              <button class="btn btn-primary">طلب دفتر صكوك</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
          <button type="button" class="btn btn-primary">ارسال الطلب </button>
        </div>
      </div>
    </div>
  </div>
                 <a class="btn btn-primary" href="transfer-add">تحويل</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection