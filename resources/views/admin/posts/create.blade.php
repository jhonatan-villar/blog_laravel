@extends('admin/layout')
@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Crear Publicacion</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
                <li class="breadcrumb-item active">Crear Post</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@stop
@section('content')
<form action="">
    <div class="row">

        <div class="col-md-8">
            <div class="card card-info">
                {{-- <div class="card-header"> --}}
                    {{-- <div class="card-title">asd</div> --}}
                    {{-- </div> --}}
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Titulo de la publicacion</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Contenido de la Publicacion</label>
                        <textarea name="" id="" rows="10" class="form-control" placeholder="body contenido"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Extracto de la publicacion</label>
                        {{-- <textarea name="" id="" class="form-control"
                            placeholder="Extracto de la publicacion"></textarea> --}}
                        <textarea id="summernote" rows="100">
                                Place <em>some</em> <u>text</u> <strong>here</strong>
                              </textarea>
                    </div>
                    {{-- <div class="form-group">
                        <label>Date masks:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask-alias="datetime"
                                data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <select name="" id="" class="form-control">
                            <option value="">Selecciona una Categoria</option>
                            @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Etiquetas</label>
                        <select class="select2bs4" multiple="multiple" data-placeholder="Select un tag"
                            style="width: 100%;">
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Date:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"
                                data-mask data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" />
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">
                            Guardar Publicación
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


@endsection

@push('styles')
<link rel="stylesheet" href="{{ url('adminlte/plugins/summernote/summernote-bs4.min.css') }}">
<link rel="stylesheet" href="{{ url('adminlte/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ url('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

@endpush

@push('scripts')
<script src="{{ url('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
    $('[data-mask]').inputmask();
    $('#reservationdate').datetimepicker({
        // format: 'L'
    });
    $('#summernote').summernote({
        height: 200
    });
    // $('.select2').select2()

    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

</script>
@endpush