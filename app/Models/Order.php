<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'payment_method', 'user_id'];

    // Generate slug automatically
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {

        });
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
