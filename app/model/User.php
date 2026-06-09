<?php

namespace app\model;

use app\service\UserService;

class User
{
    private $userService;

    private $data = [];

    public function __construct(UserService $userService, $id = null)
    {
        $this->userService = $userService;

        if ($id) {
            $this->data = $this->userService->get($id);
        }
    }

    public function __get($field)
    {
        return $this->data[$field] ?? null;
    }

    public function set(array $data)
    {
        $id = $this->userService->save($this->id, $data);

        $this->data = array_merge($this->data, $data, [ 'id' => $id ]);
    }

    public function isAdmin()
    {
        return true;
    }
}

