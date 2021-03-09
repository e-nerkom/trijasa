@extends('admin.layout.template')


@section('content')


    <div class="container-fluid page__container page__heading">

        @if (session('message'))
        <div class="alert alert-success d-flex align-items-center card-margin" role="alert">
                            <i class="material-icons mr-3">error_outline</i>
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
                            <th>Title</th>
                            <th style="width: 60%;">Deskripsi</th>
                            <th>Terakhir Diperbarui</th>
                            <th style="width: 24px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="staff02">
                        @foreach ($konten as $list)
                        <tr>
                            <td>{{ $list->title }}</td>
                            <td>{{ Str::limit($list->description, 100) }}</td>
                            <td>{{ date_format($list->updated_at, 'd M Y') }}</td>
                            <td>
                                <a href="/admin/konten/edit/{{ $list->id }}">
                                    <span class="material-icons mr-2">mode_edit</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>


@endsection
