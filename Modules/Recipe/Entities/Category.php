<?php

namespace Modules\Recipe\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * @var string
     */
    protected $table = 'recipe__categories';


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
        return $this->belongsToMany('Modules\Recipe\Entities\Recipe', 'recipe__category_recipe');
    }
}
