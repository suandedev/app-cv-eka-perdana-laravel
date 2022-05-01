<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiceKind extends Model
{
    use HasFactory;

    protected $fillable = ['rice_kind'];

    public function kinds() {
        return $this->hasMany(Panen::class);
    }
}
