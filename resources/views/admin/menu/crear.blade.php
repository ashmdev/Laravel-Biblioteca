@extends("theme.$theme.layout")

@section('titulo')
    Crear menu
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
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Crear menu</h3>
                </div>
                <!-- /.box-header -->
                <form id="form-general" method="POST" action="{{route('admin.guardar_menu')}}" class="form-horizontal"
                      autocomplete="off">
                    @csrf
                    <div class="box-body">
                        @include('admin.menu.form')
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
