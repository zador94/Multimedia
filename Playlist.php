<?php

class Playlist
{
    private array $listFiles = [];
    public function __construct(private string $name)
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


    public function getListFiles(): array
    {
        return $this->listFiles;
    }


    public function setListFiles(MultimediaFile $multimediaFile): void
    {
        $this->listFiles[$multimediaFile->getName()] = $multimediaFile;
    }

    public function deleteListFiles(string $name): void
    {
        unset($this->listFiles[$name]);
    }

    public function durationPlaylist(): float|int
    {
        foreach ($this->listFiles as $file) {
            $sumDuration += $file->getDuration();
        }
        return $sumDuration;
    }

}