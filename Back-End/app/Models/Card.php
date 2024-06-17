<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    public function binders()
    {
        return $this->belongsToMany(Binder::class, 'binder_card');
    }
}
