<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class szavak extends Model
{
    /** @use HasFactory<\Database\Factories\SzavakFactory> */
    use HasFactory;

    protected $table = 'szavak';
    protected $fillable = ['angol', 'magyar', 'temaId'];
    
    public function tema()
    {
        return $this->belongsTo(tema::class, 'temaId');
    }
}
