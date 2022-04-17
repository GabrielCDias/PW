<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Produto;

class Produto extends Model
{
    use HasFactory;
    protected $table = "produtos";

    function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'id_fornecedor', 'id');
    }
}
