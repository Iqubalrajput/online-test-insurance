<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;
    protected $table = 'insurances_plans';
    protected $fillable = ['name', 'description', 'image'];
    
    public function insurancePurchases()
    {
        return $this->hasMany(InsurancePurchase::class, 'insurance_plan_id', 'id');
    }
}
