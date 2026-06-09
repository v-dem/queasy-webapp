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
            $anotherUser = $this->app->userService->getByName($this->post['name']);
            if ($anotherUser) {
                throw new Exception('This name is already taken.');
            }

            $this->request->getAttribute('user')->set([
                'name' => $this->post['name']
            ]);
        } catch (Exception $e) {
            $errors[] = $e->getMessage();
        }

        return $this->get();
    }
}

