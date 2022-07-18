<?php //inicialização do bloco PHP

namespace App\Models; //definição do namespace App\Models

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; //inclusão da classe model

class SiteContato extends Model //declarando uma classe extendendo a classe Model
{
    use HasFactory;
    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contato', 'mensagem'];
}
