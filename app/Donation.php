<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'donations';
    protected $primarykey='id_donation';
    protected $fillable= ['descripcion','archivo'];
    public $timestamps = false;
}
