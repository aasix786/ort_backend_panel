<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;
    protected $table = 'trucks';
    protected $fillable = [
        'vin_no',
        'license_no',
        'max_drive_miles',
        'max_deadhead_miles',
        'max_load_size',
        'weekly_load_revenue_goal',
        'truck_type',
        'truck_size',
        'updated_at',
        'created_at',
    ];
}
