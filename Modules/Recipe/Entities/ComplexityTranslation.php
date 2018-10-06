<?php

namespace Modules\Recipe\Entities;

use Illuminate\Database\Eloquent\Model;

class ComplexityTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'recipe__complexity_translations';
}
