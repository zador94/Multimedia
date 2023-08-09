<?php

class MediaLibrary
{
    private array $listUsers = [];
    private array $listMultimedialFiles = [];

    /**
     * @return array
     */
    public function getListUsers(): array
    {
        return $this->listUsers;
    }

    /**
     * @param array $listUsers
     */
    public function setListUsers(User $user): void
    {
        $this->listUsers[] = $user;
    }

    public function deleteUser(string $name)
    {
        foreach ($this->listUsers as $key=>$user) {
            if ($user->getName() == $name) {
                unset($this->listUsers[$key]);
            }
        }
    }

    /**
     * @return array
     */
    public function getListMultimedialFiles(): array
    {
        return $this->listMultimedialFiles;
    }

    /**
     * @param array $listMultimedialFiles
     */
    public function setListMultimedialFiles(MultimediaFile $multimediaFile): void
    {
        $this->listMultimedialFiles[] = $multimediaFile;
    }

    public function deleteListMultimedia(string $name)
    {
        foreach ($this->listMultimedialFiles as $key=>$file) {
            if ($file->getName() == $name) {
                unset($this->listUsers[$key]);
            }
        }
    }

}