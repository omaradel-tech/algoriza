<?php

namespace omaradel\Algoriza\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Botble\Base\Models\BaseQueryBuilder<static> query()
 */
class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'name',
        'status',
    ];
}
