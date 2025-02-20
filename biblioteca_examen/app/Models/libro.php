<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    protected $table = 'libros';
    protected $fillable = ['id','titulo', 'editorial', 'autor', 'imagen'];
    public function prestamos(){
        return $this->hasMany(prestamos::class);
    }
}
