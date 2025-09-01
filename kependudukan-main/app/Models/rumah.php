<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'alamat',
        'foto',
    ];

    /**
     * Get the path to the model's photo.
     *
     * @return string
     */
    public function getFotoPathAttribute()
    {
        return asset('storage/' . $this->foto);
    }
}
