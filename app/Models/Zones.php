<?php

namespace App\Models;
use App\Models\Trajet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomZone'
    ];

    public function trajets()
    {
        return $this->hasMany(Trajet::class);
    }
}
