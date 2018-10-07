<?php

namespace Modules\Recipe\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use Translatable;

    /**
     * @var string
     */
    protected $table = 'recipe__times';

    /**
     * @var array
     */
    public $translatedAttributes = [];

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
