<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activities extends Model
{
    use HasFactory;
    public function assistances(){
        return $this->hasMany(assistances::class);
    }
    public function payment(){
        return $this->hasOne(payments::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }
}
