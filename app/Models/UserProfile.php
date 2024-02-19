<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'father_name',
        'mother_name',
        'status',
        'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
