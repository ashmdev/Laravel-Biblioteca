@foreach($menu['submenu'] as $key => $menu)
    <tr>
        <td class="pl-{{$pl}}"><i class="fa fa-arrow-right"></i>{{$menu['nombre']}}
        </td>
        @foreach($roles as $id =>$nombre)
            <td class="text-center">
                <input type="checkbox" class="menu-rol" name="menu-rol[]"
                       data-menuid="{{$menu['id']}}"
                       value="{{$id}}" {{in_array($id, array_column($menusRoles[$menu["id"]],"id"))?"checked":""}}>
            </td>
        @endforeach
    </tr>
    @include('admin.menu-rol.menu-rol-item',['menu'=>$menu,'pl'=>$pl+20])
@endforeach
