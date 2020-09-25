<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permiso extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description',
    ];

    public function roles(){
        return $this->belongsToMany('App\Models\role')->withTimesTamps();
    }

    public function users(){
        return $this->belongsToMany('App\Models\User')->withTimesTamps();
    }
}
