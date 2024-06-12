<?php

declare(strict_types=1);
namespace App\Services;
use Illuminate\Support\Facades\Http;

class ViaCepService
{

    //Usando metodo estatico
    public static function handle(string $zipcode)
    {
        return Http::get("viacep.com.br/ws/$zipcode/json/")->json();
    } 

}
    //Usando metodo não estatico
    /*public function __construct
    (
        private string $zipcode
    )
    {}
   public function handle()
   {
    return Http::get("viacep.com.br/ws/$this->zipcode/json/")->json();
   }
   /*
   */