@extends('admin.master')
@section('content')
    <div class="container">
        <a href="{{ route('admin.user.create') }}" class="btn mb-3 btn-primary">Tạo người dùng</a>
        <div class="card mb-3">
            <div class="card-header ">Danh sách người dùng</div>
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date Created</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($users as $index => $user)
                        <tr>
                            <td>{{ (($users->currentPage()-1) * $users->perPage()) + ($index + 1) }}</td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a href="{{ route('admin.user.show', ['id' => $user->id]) }}"
                                    class="btn btn-primary">Edit</a>
                                <a href="{{ route('admin.user.delete', ['id' => $user->id]) }}"
                                    class="btn btn-danger"
                                    onclick="remove({{$user->id}})">Delete</a>
                                <form action="{{ route('admin.user.delete', ['id' => $user->id]) }}"
                                        method="post" id="user-delete-{{ $user->id }}">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No data</td>
                        </tr>
                    @endforelse


                    </tbody>
                </table>

                {{ $users->links() }}

            </div>
        </div>
    </div>
@endsection
<script>
function remove(userId){
    event.preventDefault();
    var ok = confirm("Bạn có muốn xóa không?");
    if (ok == true) {
        document.getElementById('user-delete-'+userId).submit();
    }
}
</script>
