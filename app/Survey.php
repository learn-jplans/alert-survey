<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'surveys';
    protected $fillable = ['first_name', 'last_name', 'middle_name', 'birth_date', 'feedback'];
}
