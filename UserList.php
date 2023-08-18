<?php

class UserList
{
    private array $listUsers = [];


    public function getListUsers(): array
    {
        return $this->listUsers;
    }


    public function setListUsers(User $user): void
    {
        $this->listUsers[$user->getNameUser()] = $user;
    }

    public function deleteUser(string $name)
    {
        unset($this->listUsers[$name]);
    }


}