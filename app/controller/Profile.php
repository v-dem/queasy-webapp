<?php

namespace app\controller;

use app\Controller;

class Profile extends Controller
{
    public function get()
    {
        if (!empty($this->app->user)) {
            return $this->view('profile.php', array_merge($this->post, [
                'user' => $this->app->user
            ]));
        }

        return $this->redirect->path('index.php/sign-in');
    }

    public function post()
    {
        if (empty($this->app->user)) {
            return $this->redirect->path('index.php/sign-in');
        }

        $this->app->db->users->id[$this->app->user['id']] = [
            'name' => $this->post['name']
        ];

        $this->app->signIn($this->app->db->users->id[$this->app->user['id']]);

        return $this->get();
    }
}

