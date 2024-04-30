<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{protected $fillable = ['name','message', 'email'];
    use HasFactory;
    public $timestamps=true;

}
