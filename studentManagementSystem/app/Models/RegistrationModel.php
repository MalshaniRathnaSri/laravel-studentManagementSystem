<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationModel extends Model
{
    protected $table='registrations';
    protected $fillable=['firstName','lastName','email','password','confirmPassword','address'];
    use HasFactory;
}
