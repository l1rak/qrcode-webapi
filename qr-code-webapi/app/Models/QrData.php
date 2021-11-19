<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QrData extends Model
{
    use HasFactory;

    /* model for binding the data to the user */
    public function data(){
        return $this->belongsTo(User::class);
    }
}
