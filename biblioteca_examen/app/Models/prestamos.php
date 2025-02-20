<?php

namespace App\Models;
use App\Models\prestamos;

use Illuminate\Database\Eloquent\Model;

class prestamos extends Model
{
    protected $table = 'prestamos';
    protected $fillable = ['libro_id','socio_id'];
    public function socio(){
        return $this->belongsTo(socios::class);
        }
    public function libro(){
        return $this->belongsTo(libro::class);
    }
}
