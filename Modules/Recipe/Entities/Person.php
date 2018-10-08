<?php

namespace Modules\Recipe\Entities;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * @var string
     */
    protected $table = 'recipe__persons';

    /**
     * @var array
     */
    protected $fillable = [
        'amount_of_persons'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipes()
    {
        return $this->hasMany('Modules\Recipe\Entities\Recipe');
    }
}
