@extends('/admin/layout')
@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Todas las publicaciones</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@stop
@section('content')
<h1>Aqui va el contenido</h1>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with minimal features & hover style</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="posts-table1" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TÍTULO</th>
                    <th>Extracto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
          <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->excerpt }}</td>
                    <td>
                        <div class="btn btn-info"><i class="fa fa-pen"></i></div>
                        <div class="btn btn-danger"><i class="fa fa-times"></i></div>
                    </td>
                </tr>
            @endforeach

          </tbody>
          <tfoot>

          </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@stop