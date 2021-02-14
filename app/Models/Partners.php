<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{

    protected $fillabe=['nome','categories_id','descricao','localizacao','face','insta','whats',
                        'email','img1','img2','img3'];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }


}

