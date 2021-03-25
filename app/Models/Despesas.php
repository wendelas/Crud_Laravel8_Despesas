<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Despesas extends Model
{
   // protected $table = 'despesas'; 

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
