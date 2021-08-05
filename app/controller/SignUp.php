<?php

namespace app\controller;

use app\Controller;

class SignUp extends Controller
{
    public function get($action = null)
    {
        if (empty($this->app->user)) {
            return $this->view('sign-up.php');
        } else {
            $this->app->redirect('index.php');
        }
    }

    public function post()
    {
        $this->app->redirect();
        /*
        if (empty($this->app->user)) {
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
        } else {
            $this->app->redirect();
        }
        */
    }
}

