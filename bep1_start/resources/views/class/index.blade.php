@extends('layout.base')

@section('main')
<div class="row p-3">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h5 class="text-success">Quan ly lop hoc</h5>
        <table class="table table-bordered table table-lg table-size">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ten lop</th>
                    <th>Thao tac</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Class as $class)
                <tr>
                    <td>{{ $class->idClass}}</td>
                    <td>{{ $class->nameClass}}</td>
                    <td>
                        <form action="{{route('class.destroy', $class->idClass)}}" method="post">
                            <a href="{{route('class.edit', $class->idClass)}}" class="btn btn-success btn-sm">Sua</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning btn-sm"
                                onclick="confirmDelete('{{ $class->idClass }}')">Xoa
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('class.create') }}" class="btn btn-success btn-sm float-start">Them moi</a>
    </div>
    <div class="col-md-1"></div>
</div>
<script>
function confirmDelete(classId) {
    if (confirm("Bạn có chắc chắn muốn xóa lop hoc này không?")) {
        $.ajax({
            url: "{{ route('class.destroy', '') }}" + "/" + classId,
            type: 'DELETE',
            data: {
                _token: "{{ csrf_token() }}"
            },
            success: function(data) {
                location.reload();
            },
            error: function(data) {
                alert('Có lỗi xảy ra trong quá trình xóa.');
            }
        });
    }
}
</script>
@endsection