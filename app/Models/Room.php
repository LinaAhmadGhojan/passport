<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable=[
        'check_out_date_eligible',
        'check_in_date_eligible',
        'room_type_eligible',
        'check_in_date_extra',
        'check_out_date_extra',
        'room_type_extra',
        'id_user'

    ];
}
