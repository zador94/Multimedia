<?php

class Playlist
{
    private array $listFiles = [];
    public function __construct(private string $name)
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getListFiles(): array
    {
        return $this->listFiles;
    }

    /**
     * @param array $listFiles
     */
    public function setListFiles(MultimediaFile $multimediaFile): void
    {
        $this->listFiles[] = $multimediaFile;
    }

    public function deleteListFiles(string $name): void
    {
        foreach ($this->listFiles as $key => $file) {
            if ($file->getName() == $name) {
                unset($this->listFiles[$key]);
            }
        }
    }

    public function DurationPlaylist(): float|int
    {
        foreach ($this->listFiles as $file) {
            $sumDuration = array_sum($file->getDuration());
        }
        return $sumDuration;
    }

}