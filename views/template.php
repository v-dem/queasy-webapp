<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <base href="<?php echo preg_replace('/index\.php.*/', '', $this->app->request->getRequestTarget()) ?>" />

        <title>QuEasy PHP Framework - Sample Web Application</title>

        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-icons.css" />
        <?php if (function_exists('renderCss')) renderCss() ?>
        <style>
            body > nav {
                margin-bottom: 15px;
            }

            body > footer {
                margin-top: 15px;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><span class="bi-chat-left-text-fill"></span> QuEasy Notes</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                    </ul>

                    <span class="navbar-text">
                        <?php if (empty($user)) { ?>
                            <a class="card-link active" href="index.php/sign-in"><span class="bi-key-fill"></span>&nbsp;Sign In</a>
                            <a class="card-link" href="index.php/sign-up"><span class="bi-person-plus-fill"></span>&nbsp;Sign Up</a>
                        <?php } else { ?>
                            <a class="card-link" href="index.php/sign-in/logout"><span class="bi-x-circle-fill"></span>&nbsp;Logout</a>
                        <?php } ?>
                    </span>
                </div>
            </div>
        </nav>

        <?php if (function_exists('renderMain')) renderMain($__data) ?>

        <footer>
            <div class="text-center">
                <small>QuEasy PHP Framework Demo Application</small>
            </div>
        </footer>

        <script type="application/javascript" src="js/bootstrap.bundle.min.js"></script>
        <?php if (function_exists('renderJs')) renderJs() ?>
    </body>
</html>

