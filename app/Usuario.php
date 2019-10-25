<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['Nome','Sobrenome','Email','Data_De_Nascimento'];
    // protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'usuarios';

}
