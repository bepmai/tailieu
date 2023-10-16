@extends('layout.base')

@section('main')
<div class="container">
    <div class="row">
        <form action="{{route('user.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="mb-3">
                        <label class="form-label">Ten sinh vien</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gioi tinh</label>
                        <select name="gender" class="from-control">
                            <option value="male">male</option>
                            <option value="female">female</option>
                            <option value="other">other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">So dien thoai</label>
                        <input type="tel" name="numberPhone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Chọn lớp học</label>
                        <select name="id_Class" class="form-control">
                            @foreach($classes as $class)
                            <option value="{{ $class->idClass }}">{{ $class->nameClass }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mat khau</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                </div>
            </div>
            <div class="float-end">
                <button type="submit" class="btn btn-success btn-sm">Luu</button>
                <a href="{{route('user.index')}}" class="btn btn-secondary btn-sm">Thoat</a>
            </div>
        </form>
    </div>
    <div class="col-md-1"></div>
</div>
@endsection