<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class); //jodi model er name onujaye column nam na korti then         return $this->hasOne(Useer::class,''new column name);
        
    }
}
