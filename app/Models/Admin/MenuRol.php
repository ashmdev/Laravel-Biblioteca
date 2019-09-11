<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\MenuRol
 *
 * @property int $rol_id
 * @property int $menu_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\MenuRol newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\MenuRol newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\MenuRol query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\MenuRol whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\MenuRol whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\MenuRol whereRolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\MenuRol whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MenuRol extends Model
{
    protected $table = "menu_rol";
    public $timestamps = false;
}
