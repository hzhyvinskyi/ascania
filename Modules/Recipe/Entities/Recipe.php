<?php

namespace Modules\Recipe\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use Translatable;

    /**
     * @var string
     */
    protected $table = 'recipe__recipes';

    /**
     * @var array
     */
    public $translatedAttributes = [];

    /**
     * @var array
     */
    protected $fillable = [
        'times_id', 'persons_id', 'complexity_id', 'name', 'image', 'text', 'intro'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany('Modules\Recipe\Entities\Category', 'recipe__category_recipe');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function times()
    {
        return $this->belongsTo('Modules\Recipe\Entities\Time');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function persons()
    {
        return $this->belongsTo('Modules\Recipe\Entities\Person');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function complexity()
    {
        return $this->belongsTo('Modules\Recipe\Entities\Complexity');
    }
}
