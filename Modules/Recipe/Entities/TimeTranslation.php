<?php

namespace Modules\Recipe\Entities;

use Illuminate\Database\Eloquent\Model;

class TimeTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'recipe__time_translations';
}
