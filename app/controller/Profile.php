<?php

namespace app\controller;

use app\Controller;

use Exception;

class Profile extends Controller
{
    protected $viewPath = 'profile.php';

    public function get()
    {
        return $this->view->html($this->post);
    }

    public function post()
    {
        $errors = [];
        try {
            $anotherUser = $this->app->db->users->name[$this->post['name']];
            if ($anotherUser) {
                throw new Exception('This name is already taken.');
            }

            $this->app->db->users->id[$this->app->user()->id] = [
                'name' => $this->post['name']
            ];

            $this->app->user()->name = $this->post['name'];
        } catch (Exception $e) {
            $errors[] = $e->getMessage();
        }

        return $this->get();
    }
}

