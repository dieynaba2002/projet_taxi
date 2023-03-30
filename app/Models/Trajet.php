<?php

namespace App\Models;
use App\Models\Zones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomTrajet',
        'tarif',
        'zone_id'
    ];

    public function zone()
    {
        return $this->belongsTo(Zones::class);
    }
}
