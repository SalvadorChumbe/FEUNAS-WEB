<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'full-access',
    ];

    public function users(){
        return $this->belongsToMany('App\Models\User')->withTimesTamps();
    }
    public function permisos(){
        return $this->belongsToMany('App\Models\permiso')->withTimesTamps();
    }

}
