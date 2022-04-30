<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panen extends Model
{
    use HasFactory;

    protected $fillable = ['petani_id', 'weight'];

    public function petani() {
        return $this->belongsTo(Petani::class);
    }
}
