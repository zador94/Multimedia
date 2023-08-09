<?php

class VideoFile extends MultimediaFile
{

    public function __construct(string $name, float $duration, private string $screenResolution, private int $frequency)
    {
        parent::__construct($name, $duration);
    }

    /**
     * @return int
     */
    public function getFrequency(): int
    {
        return $this->frequency;
    }

    /**
     * @param int $frequency
     */
    public function setFrequency(int $frequency): void
    {
        $this->frequency = $frequency;
    }

    /**
     * @return string
     */
    public function getScreenResolution(): string
    {
        return $this->screenResolution;
    }

    /**
     * @param string $screenResolution
     */
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