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
use PhpParser\Node\Expr\Cast\Object_;  

Route::get('/', function () {
    
    $api = '{"name": "Alexandre", "document": "023.222.222-22", "gender": "Male"}';
   
    $Person = new PersonDTO(json_decode($api));
    //instanceof verificando se uma classe é instancia de outra... usar interfaces é o metodo mais aceito e verifica pela interface
    if($Person instanceof PersonDTOInterface){
        //dd('é uma instancia');
    }
        //dd('Não é uma instancia de PersonDTO');
    
    //checagem criando sua propria função pode limpar mais o codigo

    function checkinstanceisPerson(PersonDTOInterface $Person): bool
    {
        return true;
    }

    if(checkinstanceisPerson($Person)){
        dd('é uma instancia');
    } 
    

});
   
   
    /*classe anonima
    $Person = new class(json_decode($api))
    {
        public function __construct
        (
            private StdClass $properties,
            private string $name = '',
            private string $document = '',
            private string $gender = '',
        )
        {
            $this->name = $this->properties->name;
            $this->document = $this->properties->document;
            $this->gender = $this->properties->gender;
    
        } 
    
    
        public function getName(): string
        {
            return $this->name;
        }
    
    };
      
    dd($Person->getName());
    
    /*
    //como se ps dados viessem de uma api no formato jason --> jeito certo de trabalhar
    $api = '{"name": "Alexandre", "document": "023.222.222-22", "gender": "Male"}';

    //cria uma classe DTO data transfer object que recebe um array
    $Person = new PersonDTO(json_decode($api));
    //dentro do construtor, vc passa o json_decode para transformar em uma stdclass passa os dados do json 
    $Person->getName();  
    $Person->getDocument();
    $Person->getGender();
    // $Person->name = 'Alexandre'; não consegue mudar atributos no meio do codigo, mantendo a integridade do sistema;


    $array = (Object)
        [
            'name' => "Alexandre",
            'document' => "022.222.222-22",
            'gender' => "Male",
        ];






/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/supports/{id}/replies', [ReplySupportController::class, 'store'])->name('replies.store');
    Route::delete('/supports/{id}/replies/{reply}', [ReplySupportController::class, 'destroy'])->name('replies.destroy');
    Route::get('/supports/{id}/replies', [ReplySupportController::class, 'index'])->name('replies.index');

    // Route::resource('/supports', SupportController::class);
    Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');
    Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');
    Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
    Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
    Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
    Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
});


require __DIR__ . '/auth.php';
*/