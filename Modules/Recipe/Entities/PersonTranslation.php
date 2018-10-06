<?php

namespace Modules\Recipe\Entities;

use Illuminate\Database\Eloquent\Model;

class PersonTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'recipe__person_translations';
}
