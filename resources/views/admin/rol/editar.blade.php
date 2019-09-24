@extends("theme.$theme.layout")

@section('titulo')
    Editar rol
@endsection

@section('script')
    <script src="{{asset('assets/js/pages/crear.js')}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.forms.errores')
            @include('includes.forms.mensajes')
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Rol</h3>
                    <div class="box-tools pull-right">
                        <a type="button" class="btn btn-sm bg-orange btn-flat margin tooltipsC"
                           title="Listar roles"
                           href="{{route('admin.listar_rol')}}">
                            <i class="fa fa-backward"></i>
                            Listar
                        </a>
                    </div>
                </div>
                <form action="{{route('admin.actualizar_rol', ['id' => $rol->id])}}" id="form-general"
                      class="form-horizontal" method="POST" autocomplete="off">
                    @csrf
                    @method("put")
                    <div class="box-body">
                        @include('admin.rol.form')
                    </div>
                    <div class="box-footer">
                        @include('includes.forms.boton-editar')
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
