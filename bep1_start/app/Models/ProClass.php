<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProClass extends Model
{
    use HasFactory;

    protected $primaryKey = 'idClass';
    
    protected $fillable = ['nameClass'];
    
    public function user(){
        return $this->hasOne(User::class);
    }
}