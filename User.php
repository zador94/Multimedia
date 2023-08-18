<?php

class User
{
    private array $listPlaylist = [];
    public function __construct(private string $nameUser)
    {
    }

    public function getNameUser(): string
    {
        return $this->nameUser;
    }


    public function setNameUser(string $nameUser): void
    {
        $this->nameUser = $nameUser;
    }


    public function getListPlaylist(): array
    {
        return $this->listPlaylist;
    }


    public function setListPlaylist(Playlist $playlist): void
    {
        $this->listPlaylist[] = $playlist;
    }

    public function deletePlaylist(string $name): void
    {
        foreach ($this->listPlaylist as $key => $file) {
            if ($file->getName() == $name) {
                unset($this->listPlaylist[$key]);
            }
        }
    }

    public function addFilesPlaylist(Playlist $playlist, MultimediaFile $file): void
    {
        $playlist->setListFiles($file);
    }

    public function deleteFilesPlaylist(Playlist $playlist, string $name): void
    {
        $playlist->deleteListFiles($name);
    }
}