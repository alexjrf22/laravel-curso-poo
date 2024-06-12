<?php 

declare(strict_types=1);
namespace App\DTO;

use App\DTO\Contracts\PersonDTOInterface;
use stdClass;

class PersonDTO implements PersonDTOInterface
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

    public function getDocument(): string
    {
        return $this->document;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    

}