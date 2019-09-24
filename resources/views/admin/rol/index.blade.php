@extends("theme.$theme.layout")

@section('titulo')
    Listar rol
@endsection

@section('script')
    <script src="{{asset('assets/js/pages/index.js')}}"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de roles</h3>
                    <div class="box-tools pull-right">
                        <a type="button" class=" btn btn-sm bg-olive btn-flat margin"
                           href="{{route('admin.crear_rol')}}">
                            <i class="fa fa-plus-square"></i>
                            Crear
                        </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    @csrf
                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th class="text-right">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $rol)
                            <tr>
                                <td>{{$rol->id}}</td>
                                <td>{{$rol->nombre}}</td>
                                <td class="text-right">
                                    <a class="btn btn-sm bg-aqua btn-flat tooltipsC"
                                       title="Editar este rol"
                                       href="{{route('admin.editar_rol',['id'=>$rol->id])}}">
                                        <i class="fa fa-pencil-square"></i>
                                    </a>
                                    &nbsp;
                                    <button class="btn btn-sm bg-maroon btn-flat tooltipsC eliminar-general"
                                            title="Eliminar este rol"
                                            data-method="DELETE"
                                            data-url="{{route('admin.eliminar_rol',['id'=>$rol->id])}}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
