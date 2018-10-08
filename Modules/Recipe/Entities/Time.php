<?php

namespace Modules\Recipe\Entities;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    /**
     * @var string
     */
    protected $table = 'recipe__times';

    /**
     * @var array
     */
    protected $fillable = [
        'amount_of_time'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipes()
    {
        return $this->hasMany('Modules\Recipe\Entities\Recipe');
    }
}
