<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

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
    public $timestamps = "";
}
