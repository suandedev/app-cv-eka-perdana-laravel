<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panen extends Model
{
    use HasFactory;

    protected $fillable = ['petani_id', 'rice_kind_id', 'weight'];

    public function petanis() {
        return $this->belongsTo(Petani::class);
    }
    public function kind() {
        return $this->hasMany(RiceKind::class);
    }
}
