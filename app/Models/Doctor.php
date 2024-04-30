<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{ protected $fillable = ['name', 'phone', 'speciality', 'image', 'room'];

    public $timestamps=true;
    use HasFactory;
}
