<?php

namespace Modules\Recipe\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;

    protected $table = 'recipe__categories';
    public $translatedAttributes = [];
    protected $fillable = [];
}
