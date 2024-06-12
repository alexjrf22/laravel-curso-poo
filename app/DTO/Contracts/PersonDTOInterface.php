<?php 

namespace app\DTO\Contracts;

interface PersonDTOInterface
{
    public function getName(): string;
    public function getDocument(): string;
}