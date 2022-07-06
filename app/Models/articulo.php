<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
    use HasFactory;

    protected $table = "articulo";

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

}
