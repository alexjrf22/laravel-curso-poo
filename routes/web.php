<?php declare(strict_types=1);

use Illuminate\Support\Facades\Route;

class invoice
{
   protected array $properties = [];
    
    public function __get(string $key): mixed
    {
        if(array_key_exists($key, $this->properties)){
            return $this->properties[$key];
        }
        return null;    
    }

    public function __set(string $key, mixed $value): void
    {
        $this->properties[$key] = $value;
    }

}

Route::get('/', function () {

   $invoice = new invoice;
   $invoice->id = 2;
   $invoice->date = date(format: 'd/m/y');
   dd($invoice);

});
   
 

/*


class Person
{
    public function __get(string $name): mixed
    {
        if(property_exists($this, $name)){
            return $this->$name;
        }
        return null;   
    }

    public function __set(string $name, mixed $value): void
    {
        $this->name = $value;
    }
}

*/
   