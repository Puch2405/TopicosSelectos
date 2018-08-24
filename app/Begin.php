<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Begin extends Model
{
    protected $table = 'begins';
    protected $primarykey='id_begin';
    protected $fillable= ['descripcion'];
    public $timestamps = false;
}
