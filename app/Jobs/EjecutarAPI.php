<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Ejecucion;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;

class EjecutarAPI implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        \logger("Inicio de funcion : fastPrimeArray ");
        Ejecucion::fastPrimeArray(1000000);
        \logger("Fin de funcion : fastPrimeArray ");
    }

    public function SendMail(){
        \logger("Inicio de funcion : SendMail");
        Mail::to('mio_546@hotmail.com')->send(new EnviarCorreo());
        // Mail::to('jcuribe@legops.com')->send(new EnviarCorreo());
        \logger("Fin de funcion : SendMail ");
    }
}
