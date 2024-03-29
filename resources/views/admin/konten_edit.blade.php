@extends('admin.layout.template')
@section('content')
    <div class="container-fluid page__container page__heading">

        @if (session('fail'))
        <div class="alert alert-warning d-flex align-items-center card-margin" role="alert">
            <i class="material-icons mr-3">error_outline</i>
            <div class="text-body">{{ session('fail') }}</div>
        </div>
        @endif
    
        <div class="card">            

            <div class="card-body button-list">

                <form method="POST" action="/admin/konten/edit/{{ $data->id }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title:</label>
                        <input type="text" name="title" class="form-control" value="{{ $data->title }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Deskripsi:</label>
                        <textarea id="summernote" name="description">
                            {{ $data->description }}
                        </textarea>
                    </div>
                    <input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-primary">
                </form>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Hello Bootstrap 4',
                tabsize: 2,
                height: 250
            });
        });
    </script>


@endsection
