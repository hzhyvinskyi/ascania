<?php

namespace Modules\Recipe\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;

    /**
     * @var string
     */
    protected $table = 'recipe__categories';

    /**
     * @var array
     */
    public $translatedAttributes = [];

    /**
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany('Modules\Recipe\Entities\Recipe');
    }
}
