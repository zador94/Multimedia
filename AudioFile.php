<?php

class AudioFile extends MultimediaFile
{
public function __construct(string $name, float $duration, private float $bitreit)
{
    parent::__construct($name, $duration);
}

    /**
     * @return float
     */
    public function getBitreit(): float
    {
        return $this->bitreit;
    }

    /**
     * @param float $bitreit
     */
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