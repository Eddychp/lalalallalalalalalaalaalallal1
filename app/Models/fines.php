<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fines extends Model
{
    use HasFactory;
    public function fine(){
        return $this->hasOne(fines::class);
    }
    public function payment(){
        return $this->hasMany(payments::class);
    }
}
