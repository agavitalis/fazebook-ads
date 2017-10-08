<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    protected $fillable = [
        'publisher_id', 'ad_id','link','address','confirmed'
   ];
}

