<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parkir extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_parkir',
        'lokasi_parkir',
        'jarak',
        'jam',
        'harga',
        'rating'
        
    ];
}
