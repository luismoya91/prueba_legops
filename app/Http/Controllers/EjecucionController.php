<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Ejecucion;
use Illuminate\Support\Facades\Event;

class EjecucionController extends Controller
{
    public function index($cantidad)
    {
        for($i=1;$i<=$cantidad;$i++){
            Event::dispatch(new Ejecucion());
        }
    }
}
