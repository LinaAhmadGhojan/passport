<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationPassport2 extends Model
{
    use HasFactory;
    protected $fillable=
    [
       'first_name',
       'last_name',
       'date_birthday',
       'gender',
       'place_birth',
       'country_residency',
       'passport',
       'date_issue',
       'date_expiry',
       'place_issue',
       'date_arrival',
       'profession',
       'organization',
       'visa_duration',
       'status',
       'passport_picture',
       'personal_picture',
       'id_user'
    ];}
