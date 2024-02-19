<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddresses extends Model
{
    use HasFactory;

    protected $fillable = [
        'address1',
        'address2',
        'pincode',
        'status',
        'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
