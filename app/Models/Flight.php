<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $table = 'flight';

    protected $fillable = [
        'name',
        'from_country_id',
        'to_country_id',
        'datetime',
        'airplane_id'
    ];

    public function airplane() {
        return $this->belongsTo(Airplane::class);
    }

    public function customers() {
        return $this->hasMany(Customer::class);
    }

    public function from_country()
    {
        return $this->belongsTo(Country::class);
    }

    public function to_country()
    {
        return $this->belongsTo(Country::class);
    }
}
