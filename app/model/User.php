<?php

namespace app\model;

class User
{
    public $id;
    public $role_id;
    public $name;
    public $password_hash;

    public function __construct(array $data)
    {
        foreach ($this as $field => &$value) {
            $value = $data[$field];
        }
    }
}

