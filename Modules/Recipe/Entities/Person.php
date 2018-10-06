<?php

namespace Modules\Recipe\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use Translatable;

    protected $table = 'recipe__people';
    public $translatedAttributes = [];
    protected $fillable = [];
}
