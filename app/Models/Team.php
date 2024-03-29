<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = "teams";
    protected $primarKey = "team_id";
    public $incrementing = true;
    public $timestamps = true;

     protected $fillable = [
        'name',
        'description'
    ];
}
