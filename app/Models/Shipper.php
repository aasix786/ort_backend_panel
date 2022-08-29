<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    use HasFactory;
    protected $table = 'shipper';
    protected $fillable = [
        'company_name',
        'primary_contact_name' ,
        'company_type',
        'email_address',
        'primary_contact_position',
        'primary_contact_number' ,
        'company_website' ,
        'company_address',
        'updated_at',
        'created_at',
    ];
}
