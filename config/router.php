<?php

return array(
    '~/index.php/sign-in/?(.*)?$~' => 'app\controller\SignIn',
    '~/index.php/sign-up$~' => 'app\controller\SignUp',
    '~/?$~' => 'app\controller\Home'
);

