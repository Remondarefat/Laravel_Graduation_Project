<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelImage extends Model
{
    protected $fillable=[
        'image'
    ];
    use HasFactory;
    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }
}
