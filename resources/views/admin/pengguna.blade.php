@extends('admin.layout.template')
@section('content')
    <div class="container-fluid page__container page__heading">

        @if (session('message'))
        <div class="alert alert-success d-flex align-items-center card-margin" role="alert">
            <i class="material-icons mr-3">check_circle</i>
            <div class="text-body">
            {{ session('message') }}
            </div>
        </div>
        @endif        
        
        <div class="card">
            
            <div class="card-body button-list">
                <table class="table mb-0 thead-border-top-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Terdaftar Sejak</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="staff02">
                        @foreach ($user as $list)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $list->name }}</td>
                            <td>{{ $list->email }}</td>
                            <td>{{ date_format($list->created_at, 'd M Y') }}</td>
                            <td>
                                <form method="POST" action="/admin/pengguna/delete/{{$list->id}}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" name="submit" class="btn btn-danger"><i class="material-icons mr-2">delete</i> Hapus User</button>
                                </form>                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>


@endsection
