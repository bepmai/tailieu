@extends('layout.base')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h5 class="text-success">Sua thong tin lop</h5> <br>
            <form action="{{route('class.update', $class->idClass)}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Ma lop</label>
                    <input type="text" name="idClass" class="form-control" value="{{$class->idClass}}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ten lop</label>
                    <input type="text" name="nameClass" class="form-control" value="{{$class->nameClass}}">
                </div>

                <div class="float-end">
                    <button type="submit" class="btn btn-success btn-sm">Cap nhat</button>
                    <a href="{{route('class.index')}}" class="btn btn-secondary btn-sm">Thoat</a>
                </div>
            </form>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
@endsection