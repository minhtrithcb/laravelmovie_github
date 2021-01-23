<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    use HasFactory;

    protected $table = "actor";
    public $timestamps = false;

    public function film()
    {
        return $this->belongsToMany(film::class);
    }
}
