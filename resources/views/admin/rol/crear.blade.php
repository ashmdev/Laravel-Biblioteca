@extends("theme.$theme.layout")

@section('titulo')
    Crear rol
@endsection


@section('script')
    <script src="{{asset('assets/js/pages/crear.js')}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.forms.errores')
            @include('includes.forms.mensajes')
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Crear menu</h3>
                    <div class="box-tools pull-right">
                        <a type="button" class="btn btn-sm bg-orange btn-flat margin tooltipsC" title="Listar roles"
                           href="{{route('admin.listar_rol')}}">
                            <i class="fa fa-backward"></i>
                            Listar
                        </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <form id="form-general" method="POST" action="{{route('admin.guardar_rol')}}" class="form-horizontal"
                      autocomplete="off">
                    @csrf
                    <div class="box-body">
                        @include('admin.rol.form')
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        @include('includes.forms.boton-crear')
                    </div>
                    <!-- /.box-footer -->
                </form>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
