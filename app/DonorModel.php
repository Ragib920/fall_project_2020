<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonorModel extends Model
{
    public $table='donor';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;  

    // public function donor_posts()
    // {
    //     return $this->hasMany(PostModel::class);
    // }

}


