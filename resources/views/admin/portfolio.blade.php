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
    
        <div class="d-flex justify-content-around pb-4">

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <a href="/admin/portfolio/add" class="btn btn-primary float-right" style="color:#ffffff">
                            <i class="material-icons">add</i> Tambah Portfolio
                        </a>
                    </div>

                    @foreach ($data as $row)
                    <div class="col-md-6 col-lg-4">
                        <div class="card card__course card__course__animate">
                            <a href="student-course.html" class="card-img-top">
                                <img src="/images/portfolio/{{ $row->path }}" style="width:100%;" alt="Card image cap">
                            </a>

                            <div class="p-3 text-center border-bottom">
                                <div class="bold mb-2">
                                    <a href="student-course.html" class="text-body">
                                        <span class="course__title">{{ $row->title }}</span>
                                    </a>
                                </div>
                            </div>
                            <div class="p-3 text-center">
                                <a href="/admin/portfolio/edit/{{ $row->id }}" class="btn btn-primary btn-sm"><i class="material-icons">mode_edit</i> Ubah</a>
                                <form method="POST" action="/admin/portfolio/delete/{{ $row->id }}" class="d-inline">
                                    @csrf  
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="material-icons">delete</i> Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

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
