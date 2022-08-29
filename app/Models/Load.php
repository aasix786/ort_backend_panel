<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Load extends Model
{
    use HasFactory;
    protected $table = 'loads';
    protected $fillable = [
        'load_ticket',
        'invoice_amount',
        'truck_no',
        'truck_type',
        'dispatcher_name',
        'miles_per_trip',
        'ave_rate_per_miles',
        'total_stops',
        'order_status',
        'user_type',
        'select_user',
        'pick_up_address',
        'pick_up_contact_no',
        'pick_up_special_instruction',
        'drop_off_address',
        'drop_off_contact_no',
        'drop_off_special_instruction',
        'updated_at',
        'created_at',
    ];
}
