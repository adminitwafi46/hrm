<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    //fillable firstname, lastname, email, gender, birthdate_city, birthdate_date, phone, marriage_status, faith, national_id, address, postcode, domisili_address, blood_type
    protected $fillable = ['firstname', 'lastname', 'email', 'gender', 'birthdate_city', 'birthdate_date', 'phone', 'marriage_status', 'faith', 'national_id', 'address', 'postcode', 'domisili_address', 'blood_type', 'foto'];

}
