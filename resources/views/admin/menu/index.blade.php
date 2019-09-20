@extends("theme.$theme.layout")

@section('titulo')
    Listar menu
@endsection

@section('head')
    <link rel="stylesheet" href="{{asset('assets/css/nestable2/jquery.nestable.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nestable2/jquery.nestable.custom.css')}}">
@endsection

@section('script')
    <script src="{{asset('assets/js/nestable2/jquery.nestable.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/admin/menu/index.js')}}"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Responsive Hover Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @csrf
                    <div class="dd" id="nestable">
                        <ol class="dd-list">
                            @foreach ($menus as $key => $item)
                                @if ($item["menu_id"] != 0)
                                    @break
                                @endif
                                @include("admin.menu.menu-item",["item" => $item])
                            @endforeach
                        </ol>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>


@endsection