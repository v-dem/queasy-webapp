<?php

namespace app\controller;

use app\Controller;

use app\model\User;

class SignIn extends Controller
{
    protected $viewPath = 'sign-in.php';

    public function get($action = null)
    {
        return $this->view->html();
    }

    public function post()
    {
        $errors = [];
        $user = $this->app->userService->getByName($this->post['name']);
        if (null == $user) {
            $errors[] = 'User not found.';
        } elseif (!password_verify($this->post['password'], $user['password_hash'])) {
            $errors[] = 'Invalid password. Please try again.';
        } else {
            $this->app->signIn(new User($this->app->userService, $user['id']));
        }

        if (count($errors)) {
            return $this->view->html([
                'errors' => $errors,
                'name' => $this->post['name']
            ]);
        } else {
            return $this->redirect->path('index.php/profile');
        }
    }
}

