@extends("theme.$theme.layout")

@section('titulo')
    Listar Menu-Rol
@endsection

@section('script')
    <script src="{{asset('assets/js/pages/admin/menu-rol/index.js')}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de menús</h3>
                    <div class="box-tools pull-right">
                        <a type="button" class=" btn btn-sm bg-olive btn-flat margin"
                           href="{{route('admin.crear_menu')}}">
                            <i class="fa fa-plus-square"></i>
                            Crear
                        </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    @csrf
                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th>menu</th>
                            @foreach($roles as $id =>$nombre)
                                <th class="text-center">{{$nombre}}</th>
                            @endforeach

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menus as $key => $menu)
                            @if ($menu['menu_id']!=0)
                                @break
                            @else
                                <tr>
                                    <td class="font-weight-bold"><i class="fa fa-arrows-alt"></i>{{$menu['nombre']}}
                                    </td>
                                    @foreach($roles as $id =>$nombre)
                                        <td class="text-center">
                                            <input type="checkbox" class="menu-rol" name="menu-rol[]"
                                                   data-menuid="{{$menu['id']}}"
                                                   value="{{$id}}"
                                                {{in_array($id, array_column($menusRoles[$menu["id"]],"id"))?"checked":""}}>
                                        </td>
                                    @endforeach
                                </tr>
                                @include('admin.menu-rol.menu-rol-item',['menu'=>$menu,'pl'=>'20'])
                            @endif
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
