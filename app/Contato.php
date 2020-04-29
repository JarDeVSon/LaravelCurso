<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista ()
    {
        return (object) [
            'nome'=> 'Guilherme',
            'tel'=> '12345678'
        ];
    }
}
