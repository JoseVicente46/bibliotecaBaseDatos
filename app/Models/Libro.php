<?php

namespace App\Models;
use App\Models\Autor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'editorial', 'precio','id_autor'];
    
    public function autor(){
        return $this->belongsTo(Autor::class,'id_autor');
        }
}
