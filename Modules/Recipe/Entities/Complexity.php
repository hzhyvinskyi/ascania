<?php

namespace Modules\Recipe\Entities;

use Illuminate\Database\Eloquent\Model;

class Complexity extends Model
{
    /**
     * @var string
     */
    protected $table = 'recipe__complexities';

    /**
     * @var array
     */
    protected $fillable = [
        'complexity_level'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recipes()
    {
        return $this->hasMany('Modules\Recipe\Entities\Recipe');
    }
}
