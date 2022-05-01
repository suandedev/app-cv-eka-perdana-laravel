<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panen extends Model
{
    use HasFactory;

    protected $fillable = ['petani_id', 'rice_kind', 'weight'];

    public function petani() {
        return $this->belongsTo(Petani::class);
    }
    public function RiceKinds() {
        return $this->hasMany(RiceKind::class);
    }
}
