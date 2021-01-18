<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socioeconomic extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'type_id',  'genre_id', 'state_id', 'ethnicity_id', 'income_id', 'deficiency_id'
    ];

    // created_at , updated_at
    public $timestamps = false;
}
