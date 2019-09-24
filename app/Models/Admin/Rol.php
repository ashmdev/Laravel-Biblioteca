<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin\Rol
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Rol newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Rol newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Rol query()
 * @mixin \Eloquent
 */
class Rol extends Model
{
    protected $table = 'rol';
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
}
