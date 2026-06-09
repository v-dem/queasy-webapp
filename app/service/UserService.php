<?php

namespace app\service;

use queasy\db\Db;

class UserService
{
    private $db;

    public function __construct(Db $db)
    {
        $this->db = $db;
    }

    public function get($id)
    {
        return $this->db->users->id[$id];
    }

    public function getByName($name)
    {
        return $this->db->users->name[$name];
    }

    public function save($id, array $data)
    {
        if ($id) {
            $this->db->users->id[$id] = $data;

            return $id;
        }

        $this->db->users[] = $data;

        return $this->db->id;
    }
}

