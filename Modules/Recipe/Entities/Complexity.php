<?php

namespace Modules\Recipe\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Complexity extends Model
{
    use Translatable;

    /**
     * @var string
     */
    protected $table = 'recipe__complexities';

    /**
     * @var array
     */
    public $translatedAttributes = [];

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
