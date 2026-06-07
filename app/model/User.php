<?php

namespace app\model;

class User
{
    private $data;
    private $isLoggedIn;
    private $isAdmin;

    public function __construct(array $data = [], $isLoggedIn = false, $isAdmin = false)
    {
        $this->data = $data;
        $this->isLoggedIn = $isLoggedIn;
        $this->isAdmin = $isAdmin;
    }

    public function __get($field)
    {
        return $this->data[$field] ?? null;
    }

    public function __set($field, $value)
    {
        $this->data[$field] = $value;
    }

    public function isLoggedIn()
    {
        return $this->isLoggedIn;
    }

    public function isAdmin()
    {
        return $this->isAdmin;
    }
}

