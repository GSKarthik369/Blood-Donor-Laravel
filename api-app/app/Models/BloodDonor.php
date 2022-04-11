<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodDonor extends Model
{
    protected $fillable = ['name', 'email', 'mobile', 'location', 'blood-group', 'last-donated-date', 'company', 'job-tile', 'dob'];
}
