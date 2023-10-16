@extends('layout.base')

@section('main')
<div class="container">
    <div class="row">
        <form action="{{route('user.update', $user->uid)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="mb-3">
                        <label class="form-label">ma sinh vien</label>
                        <input type="text" name="uid" class="form-control" value="{{$user->uid}}" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ten sinh vien</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{$user->email}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gioi tinh</label>
                        <select name="gender" class="from-control">
                            <option value="male" {{$user->gender == "male" ? 'selected' : ''}}>male</option>
                            <option value="female" {{$user->gender == "female" ? 'selected' : ''}}>female</option>
                            <option value="other" {{$user->gender == "male" ? 'selected' : ''}}>other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">So dien thoai</label>
                        <input type="tel" name="numberPhone" class="form-control" value="{{$user->numberPhone}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Chọn lớp học</label>
                        <select name="id_Class" class="form-control">
                            @foreach($classes as $class)
                            <option value="{{ $class->idClass }}" @if($class->idClass == $user->id_Class) selected
                                @endif>{{ $class->nameClass }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mat khau</label>
                        <input type="text" name="password" class="form-control" value="{{$user->password}}">
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