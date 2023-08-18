<?php

class VideoFile extends MultimediaFile
{

    public function __construct(string $name, float $duration, private string $screenResolution, private int $frequency)
    {
        parent::__construct($name, $duration);
    }


    public function getFrequency(): int
    {
        return $this->frequency;
    }


    public function setFrequency(int $frequency): void
    {
        $this->frequency = $frequency;
    }


    public function getScreenResolution(): string
    {
        return $this->screenResolution;
    }


    public function setScreenResolution(string $screenResolution): void
    {
        $this->screenResolution = $screenResolution;
    }

    public function showInfo(): void
    {
        echo 'Название файла: ' . $this->name . '<br>' .
             'Длтельность: ' . $this->duration . '<br>' .
             'Разрешение: ' . $this->screenResolution . '<br>' .
             'Частота: ' . $this->frequency . '<br>'. '<br>';
    }
}