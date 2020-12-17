<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolunteerModel extends Model
{
    public $table='volunteer';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;
}
