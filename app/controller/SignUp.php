<?php

namespace app\controller;

use app\Controller;
use app\Redirect;

class SignUp extends Controller
{
    public function get($action = null)
    {
        if (empty($this->app->user)) {
            return $this->view('sign-up.php');
        } else {
            return $this->redirect();
        }
    }

    public function post()
    {
        if (empty($this->app->user)) {
            return $this->redirect();
            /*
            $errors = [];
            $user = $this->app->db->users->name[$this->post['name']];
            if (null == $user) {
                $errors[] = 'User not found.';
            } elseif (!password_verify($this->post['password'], $user['password_hash'])) {
                $errors[] = 'Invalid password. Please try again.';
            } else {
                $this->app->signIn($user);
            }

            if (count($errors)) {
                return $this->view('sign-in.php', array(
                    'errors' => $errors,
                    'name' => $this->post['name']
                ));
            } else {
                $this->app->redirect();
            }
            */
        } else {
            return $this->redirect();
        }
    }
}

