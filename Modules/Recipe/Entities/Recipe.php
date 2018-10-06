<?php

namespace Modules\Recipe\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use Translatable;

    protected $table = 'recipe__recipes';
    public $translatedAttributes = [];
    protected $fillable = [];
}
