<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'driver';
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_no',
        'base_address',
        'license_no',
        'email',
        'updated_at',
        'created_at',
    ];
}
