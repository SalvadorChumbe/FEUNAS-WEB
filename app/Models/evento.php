<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    use HasFactory;
    protected $table ='eventos';

    protected $fillable =[
        'id','title','descripcion','end','start','color','textColor'
    ];

    

}
