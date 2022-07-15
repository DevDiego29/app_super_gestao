<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'fornecedores';
    //através do fillable autoriza que o método estático create preencha esses atributos no objeto
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
