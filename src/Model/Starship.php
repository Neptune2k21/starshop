<?php
namespace App\Model;

class Starship{
    public function __construct(
        private int $id,
        private string $name,
        private string $class,
        private string $captain,
        private string $status
    ) {}
    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getClass(): string
    {
        return $this->class;
    }
}