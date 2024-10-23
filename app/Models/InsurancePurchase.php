<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsurancePurchase extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'insurance_plan_id',
        'full_name',
        'date_of_birth',
        'marital_status',
        'number',
        'policy_start_date',
        'nationality',
        'gender',
        'destination',
        'passport_id',
        'date_of_guarantee',
        'expire_of_guarantee',
        'no_of_days',
        'uploaded_passport',
        'price',
    ];
    public function plan()
    {
        return $this->belongsTo(Insurance::class, 'plan_id');
    }
    
}
