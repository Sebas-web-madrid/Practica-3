<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Libro;
use App\Models\User;

class PrestamosModel extends Model
{
    use HasFactory;
    protected $table = "prestamos";
    
    public function libro(){
        return $this->belongsTo(Libro::class, 'book_id');

    }
    public function usuario(){
        return $this->belongsTo(User::class, 'user_id');

    }
}
