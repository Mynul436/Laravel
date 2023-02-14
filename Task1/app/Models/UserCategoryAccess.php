<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCategoryAccess extends Model
{
    use HasFactory;
    protected $fillable = ['id','customer_id','accessable_category'];
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    
    protected $casts = [
        'accessable_category' => 'array',
    ];

   
}
