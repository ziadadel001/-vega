<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mbook extends Model
{
    use HasFactory;

    protected $fillable  = [
        'user_id',
        'mentor_id',
        'cardname',
        'cardnumber',
        'expiredate',
        'CVC',
        'phoneNumber'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mentor()
    {
        return $this->belongsTo(Course::class);
    }
}
