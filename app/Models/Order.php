<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }

    public function bank()
    {
        return $this->ObelongsToe(Bank::class);
    }
}
