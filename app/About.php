<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';
    protected $primarykey='id_about';
    protected $fillable= ['descripcion','archivo'];
    public $timestamps = false;
}
