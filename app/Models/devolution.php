<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class devolution extends Model
{
    use HasFactory;

    protected $fillable = ['tithe_id','month','value'];

    public function tithe(){

        return $this->belongsTo(tithe::class);
    
    }
}
