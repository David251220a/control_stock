<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = "categoria";

    protected $guarded=[];

    public function usuario(){
        return $this->belongsTo(User::class, 'usuario_grabacion');
    }

}
