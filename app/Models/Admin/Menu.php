<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use SebastianBergmann\Diff\Line;

/**
 * App\Models\Admin\Menu
 *
 * @property int $id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int $menu_id
 * @property string $nombre
 * @property string $url
 * @property int $orden
 * @property string|null $icono
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Menu whereIcono($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Menu whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Menu whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Menu whereOrden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Menu whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Menu whereUrl($value)
 * @mixin \Eloquent
 */
class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = ['nombre', 'url', 'icono'];
    protected $guarded = ['id'];

    //obtiene todos los menus correspondiente a la sesión
    public function obtenerMenus($front)
    {
        if ($front) {
            //retorno los menus que tengan al menos un rol
            return $this->whereHas('roles', function (Builder $query) {
                //y donde el rol_id sea igual al rol de la sesión
                $query->where('role_id', session()->get('rol_id'))->orderby('menu_id');
            })->where('estado', 1)
                ->orderBy('menu_id')
                ->orderBy('orden')
                ->get()
                ->toArray();
        } else {
            //retorna todos los menús
            return $this->orderBy('menu_id')
                ->orderBy('orden')
                ->get()
                ->toArray();
        }
    }

    public function getHijos($menus, $posiblePadre)
    {
        $children = [];
        foreach ($menus as $posibleHijo) {
            if ($posiblePadre['id'] == $posibleHijo['menu_id']) {
                //posible hijo se transforma en un posible padre
                $children = array_merge($children,
                    [array_merge($posibleHijo, ['submenu' => $this->getHijos($menus, $posibleHijo)])]);
            }
        }
        return $children;
    }

    static function getMenu($front = false)
    {
        $menu = new Menu(); //Creo un objeto de la clase Menu
        $menus = $menu->obtenerMenus($front);
        //contendra el array final con el menu ordenado por padres e hijos
        $menuAll = [];
        foreach ($menus as $line) {
            //Como la respuesta viene ordenada por menu id y por orden, los padres (menu_ 0) vendran primeros el la
            // respuesta de consulta, por tanto al aparecer un id distinto de cero, rompemos el ciclo.
            if ($line['menu_id'] != 0) {
                break;
            }
            $item = [array_merge($line, ['submenu' => $menu->getHijos($menus, $line)])];
            $menuAll = array_merge($menuAll, $item);
        }
        return $menuAll;
    }

    public function guardarHijos($value)
    {
        if (!empty($value->children)) {
            foreach ($value->children as $key => $vchild) {
                $update_id = $vchild->id;
                $parent_id = $value->id;
                $this->where('id', $update_id)->update(['menu_id' => $parent_id, 'orden' => $key + 1]);
                $this->guardarHijos($vchild);
            }
        }
    }

    public function guardarOrden($menu)
    {
        $menus = json_decode($menu);
        foreach ($menus as $var => $value) {
            $this->where('id', $value->id)->update(['menu_id' => 0, 'orden' => $var + 1]);
            $this->guardarHijos($value);
        }
    }

}
