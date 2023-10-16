@extends('layout.base')

@section('main')
<div class="row p-3">
    <div class="col-md-1"></div>
    <div class="col-md-10 table-responsive overflow-auto">
        <h5 class="text-success">Quan ly sinh vien</h5>
        <table class="table table-bordered table table-lg table-size">
            <thead>
                <tr>
                    <th>Ma sinh vien</th>
                    <th>Ten sinh vien</th>
                    <th>Email</th>
                    <th>Gioi tinh</th>
                    <th>So dien thoai</th>
                    <th>Ma lop hoc</th>
                    <th>Mat khau</th>
                    <th>Thao tac</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($User as $user)
                <tr>
                    <td>{{ $user->uid}}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->gender}}</td>
                    <td>{{ $user->numberPhone}}</td>
                    <td>{{ $user->id_Class}}</td>
                    <td>{{ $user->password}}</td>
                    <td>
                        <form action="{{route('user.destroy', $user->uid)}}" method="post">
                            <a href="{{route('user.edit', $user->uid)}}" class="btn btn-success btn-sm">Sua</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning btn-sm"
                                onclick="confirmDelete('{{ $user->uid }}')">Xoa
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row mt-2">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <a href="{{ route('user.create') }}" class="btn btn-success btn-sm float-end">Them</a>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
<script>
function confirmDelete(studentId) {
    if (confirm("Bạn có chắc chắn muốn xóa sinh viên này không?")) {
        $.ajax({
            url: "{{ route('user.destroy', '') }}" + "/" + studentId,
            type: 'DELETE',
            data: {
                _token: "{{ csrf_token() }}"
            },
            success: function(data) {
                // Xử lý thành công, ví dụ: cập nhật giao diện người dùng
                location.reload(); // Tải lại trang sau khi xóa
            },
            error: function(data) {
                // Xử lý lỗi, ví dụ: hiển thị thông báo lỗi
                alert('Có lỗi xảy ra trong quá trình xóa.');
            }
        });
    }
}
</script>
@endsection