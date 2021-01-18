<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name',  'last_name', 'bio', 'socioeconomic_id', 'photo'
    ];

    // created_at , updated_at
    public $timestamps = false;
}
