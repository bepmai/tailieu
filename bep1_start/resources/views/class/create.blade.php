@extends('layout.base')

@section('main')
<div class="container">
    <div class="row">
        <h5 class="text-success">Them sinh lop</h5> <br> <br>
        <form action="{{route('class.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="mb-3">
                    <label class="form-label">Ten lop</label>
                    <input type="text" name="nameClass" class="form-control">
                </div>
            </div>
            <div class="float-end">
                <button type="submit" class="btn btn-success btn-sm">Luu</button>
                <a href="{{route('class.index')}}" class="btn btn-secondary btn-sm">Thoat</a>
            </div>
        </form>
    </div>
</div>
@endsection