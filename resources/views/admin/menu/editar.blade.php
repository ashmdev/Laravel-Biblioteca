@extends("theme.$theme.layout")

@section('titulo')
    Editar menu
@endsection

@section('head')
    <link rel="stylesheet"
          href="{{asset('assets/css/fontawesome-iconpicker/fontawesome-iconpicker.min.css')}}">
@endsection


@section('script')
    <script src="{{asset('assets/js/fontawesome-iconpicker/fontawesome-iconpicker.min.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('assets/js/fontawesome-iconpicker/fa-icons.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/pages/admin/menu/crear.js')}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.forms.errores')
            @include('includes.forms.mensajes')
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Menú</h3>
                    <a href="{{route('admin.listar_menu')}}" class="btn btn-info btn-sm pull-right">Listado</a>
                </div>
                <form action="{{route('admin.actualizar_menu', ['id' => $data->id])}}" id="form-general"
                      class="form-horizontal" method="POST" autocomplete="off">
                    @csrf
                    @method("put")
                    <div class="box-body">
                        @include('admin.menu.form')
                    </div>
                    <div class="box-footer">
                        @include('includes.forms.boton-editar')
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection