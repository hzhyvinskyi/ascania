<?php

namespace Modules\Recipe\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use Translatable;

    protected $table = 'recipe__times';
    public $translatedAttributes = [];
    protected $fillable = [];
}
