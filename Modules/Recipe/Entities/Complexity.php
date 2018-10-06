<?php

namespace Modules\Recipe\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Complexity extends Model
{
    use Translatable;

    protected $table = 'recipe__complexities';
    public $translatedAttributes = [];
    protected $fillable = [];
}
