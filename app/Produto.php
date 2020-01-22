<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {
    protected $fillable = array('nome', 'descricao', 'valor', 'quantidade');
    protected $guarded = ['id'];
}
