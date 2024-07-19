<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tithe extends Model
{
    use HasFactory;

    public function registers(){

        return $this->belongsTo(register::class);
    }

    public function devolution(){

        return $this->hasMany(devolution::class);
        
    }
    public function devolutions(){

        return $this->HasOne(devolution::class)->where('month','1');
        
    }
    public function devolutions2(){

        return $this->HasOne(devolution::class)->where('month','2');
    }
    public function devolutions3(){
      
        return $this->HasOne(devolution::class)->where('month','3');
    }
    public function devolutions4(){

        return $this->HasOne(devolution::class)->where('month','4');
    }
    public function devolutions5(){

        return $this->HasOne(devolution::class)->where('month','5');
    }
    public function devolutions6(){

        return $this->HasOne(devolution::class)->where('month','6');
    }
    public function devolutions7(){

        return $this->HasOne(devolution::class)->where('month','7');
    }
    public function devolutions8(){

        return $this->HasOne(devolution::class)->where('month','8');
    }
    public function devolutions9(){

        return $this->HasOne(devolution::class)->where('month','9');
    }
    public function devolutions10(){

        return $this->HasOne(devolution::class)->where('month','10');
    }
    public function devolutions11(){

        return $this->HasOne(devolution::class)->where('month','11');
    }
    public function devolutions12(){

        return $this->HasOne(devolution::class)->where('month','12');
    }

}
