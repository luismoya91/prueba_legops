<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejecucion extends Model
{
    use HasFactory;

    public static function fastPrimeArray($n){
        $array_aux = [];
        for($i = 2; $i <= $n; $i++){
      
          if(!isset($array_aux[$i])){
            
            $array_aux[$i] = true;
            for($b=$i+$i;$b<=$n;$b+=$i ){
      
              $array_aux[$b] = false;
            }
          }
            
        }
        return $array_aux;
      }
}
