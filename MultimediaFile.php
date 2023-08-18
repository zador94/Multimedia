<?php

abstract class MultimediaFile
{
    public function __construct(protected string $name, protected float $duration)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function getDuration(): float
    {
        return $this->duration;
    }


    public function setDuration(float $duration): void
    {
        $this->duration = $duration;
    }

    abstract public function showInfo(): void;

}