<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Binder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'binder_color',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cards()
    {
        return $this->belongsToMany(Card::class, 'binder_card');
    }
}
