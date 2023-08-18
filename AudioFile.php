<?php

class AudioFile extends MultimediaFile
{
    public function __construct(string $name, float $duration, private float $bitreit)
    {
    parent::__construct($name, $duration);
    }


    public function getBitreit(): float
    {
        return $this->bitreit;
    }


    public function setBitreit(float $bitreit): void
    {
        $this->bitreit = $bitreit;
    }

    public function showInfo(): void
    {
        echo 'Название файла: ' . $this->name . '<br>' .
             'Длтельность: ' . $this->duration . '<br>' .
             'Битрейт: ' . $this->bitreit . '<br>'. '<br>';
    }
}