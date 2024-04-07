<?php

namespace App\Store\Models;

use App\Book\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['store_address'];
    protected $hidden = ['address'];

    protected $casts = [
        'address' => 'array'
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    public function getStoreAddressAttribute()
    {
        $complement = $this->address['complement'] ? "{$this->address['complement']}, " : '';

        return sprintf("%s %s, %s%s - %s/%s | Postal Code: %s", $this->address['street'], $this->address['number'], $complement,
            $this->address['district'], $this->address['city'],  $this->address['state'],  $this->address['postal_code'],
        );

    }


}
