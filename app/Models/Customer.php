<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';

    protected $fillable = [
        'name',
        'surname',
        'category_id',
        'flight_id'
    ];

    public function flights() {
        return $this->belongsTo(Flight::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
