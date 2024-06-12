<?php

use app\DTO\Contracts\PersonDTOInterface;
use App\DTO\PersonDTO;
use App\Entities\NaturalPerson;
use App\Http\Controllers\Admin\{ReplySupportController, SupportController};
//use App\Http\Controllers\ProfileController;
//use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;
use App\Entities\Person;
use App\Entities\Traits\SuperPersonTrait;
use App\Services\ViaCepService;
use Illuminate\Support\Fluent;
use PhpParser\Node\Expr\Cast\Object_;  


//Route::get('/contato', [SiteController::class, 'contact']);


Route::get('/', function () {
    
    //Usando metodo estatico, poupa codigo
    
    //dd(ViaCepService::handle(zipcode:'72405440'));

    /* usando metodo não estatico
    $viaCep = new ViaCepService(zipcode: '72405440');
    dd($viaCep->handle());   
    */

    //classe fluente laravel 

    $data = new Fluent(ViaCepService::handle(zipcode:'72405440'));
    // com fluent vc pode trabalhar formato array assim -> dd ($data['logradouro'], $data['cep']); ou
    dd($data->cep, $data->logradouro); // resultado é o msm só muda q pode trabalhar de ambas as formas.
});
   