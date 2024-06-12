<?php

declare(strict_types=1);
namespace App\Entities\Traits;

trait SuperPersonTrait
{
    public string $gender = '';

    public function getGender(): string
    {
        return $this->gender;
    }
}