@extends('admin.layout.template')
@section('content')
    <div class="container-fluid page__container page__heading">

        @if (session('fail'))
        <div class="alert alert-warning d-flex align-items-center card-margin" role="alert">
            <i class="material-icons mr-3">error_outline</i>
            <div class="text-body">{{ session('fail') }}</div>
        </div>
        @endif

        @if (session('message'))
        <div class="alert alert-success d-flex align-items-center card-margin" role="alert">
            <i class="material-icons mr-3">check_circle</i>
            <div class="text-body">{{ session('message') }}</div>
        </div>
        @endif
    
        <div class="card">            

            <div class="card-body button-list">

                <form method="POST" action="/admin/portfolio/add" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Title:</label>
                            <input type="text" name="title" class="form-control @error('email') is-invalid @enderror" value="{{ old('title') }}">
                            @if ($errors->has('title'))
                                <div class="text-danger">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Gambar:</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Deskripsi:</label>
                            <textarea name="description" id="editor">
                                {{ old('description') }}
                            </textarea>
                            @if ($errors->has('description'))
                                <div class="text-danger">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" name="submit" value="Tambah Portfolio" class="btn btn-primary float-right">
                        </div>
                        
                    </div>
                    
                </form>
            </div>
        </div>

    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>


@endsection
