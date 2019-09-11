<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\Permiso
 *
 * @property int $id
 * @property string $nombre
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Permiso newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Permiso newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Permiso query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Permiso whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Permiso whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Permiso whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Permiso whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Permiso whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Permiso extends Model
{
    protected $table ="permiso";
}
