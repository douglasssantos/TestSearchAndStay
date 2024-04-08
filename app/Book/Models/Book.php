<?php

namespace App\Book\Models;

use App\Store\Models\Store;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'price' => 'decimal:2'
    ];

    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }
}
