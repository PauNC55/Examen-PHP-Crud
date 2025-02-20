<?php

namespace App\Models;
use App\Models\prestamos;
use Illuminate\Database\Eloquent\Model;

class socios extends Model
{
    protected $table = 'socios';
    protected $fillable = ['nombre', 'email'];
    public function prestamos(){
        return $this->hasMany(prestamos::class);
    }
}
