<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{

    protected $fillable=['nome','categories_id','descricao','localizacao','face','insta','whats',
                        'email','img1','img2','img3'];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }


}

