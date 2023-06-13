@extends('master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('search-records') }}">
                @csrf
                <div class="btn-group" role="group" aria-label="Basic example">

                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="type" value="all" checked>
                            الكل
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="type" value="discount">
                            خصم
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="type" value="deposit">
                            إيداع
                        </label>
                    </div>  </div>


                <div class="mb-3 mt-3">
                    <label for="">البدء من تاريخ</label>
                    <input class="form-control" type="date" name="start_date">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="">الى تاريخ </label>
                        <input class="form-control" type="date" name="end_date">
                        </div>

                        <button type="submit" class="btn btn-primary">طلب الان </button>
            </form>
            @if(isset($records))
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>value</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $record)
                    <tr>
                        <td>{{ $record->sender }}</td>
                        <td>{{ $record->reciple }}</td>
                        <td>{{ $record->value }}</td>
                        <td>{{ $record->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
        </div>
    </div>
</div>

@endsection
