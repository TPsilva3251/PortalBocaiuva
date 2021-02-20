<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{

    protected $fillable=['nome','categories_id','endereco','descricao','localizacao','face','insta','whats',
                        'email','img'];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }


}

