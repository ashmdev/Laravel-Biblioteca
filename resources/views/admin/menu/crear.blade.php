@extends("theme.$theme.layout")

@section('titulo')
    Crear menu
@endsection

@section('contenido')
    <div class="row">
        <div class="col-xs-12">
            @include('includes.forms.errores')
            @include('includes.forms.mensajes')
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Crear menu</h3>
                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <form id="form-general" method="POST" action="{{route('admin.guardar_menu')}}" class="form-horizontal">
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