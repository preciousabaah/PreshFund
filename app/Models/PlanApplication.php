<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;



class PlanApplication extends Model
{
    use HasFactory;

      protected $fillable = [
        'user_id',
        'plan_name',    
        'plan_amount', 
        'full_name',
        'email',
        'phone',
        'status',
        'trx'
    ];
}
