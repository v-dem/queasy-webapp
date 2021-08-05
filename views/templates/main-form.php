<?php

function renderMain(array $__data)
{
    extract($__data);
?>
    <div class="row justify-content-center">
        <div class="col col-md-8 col-lg-6 align-self-center">
            <?php if (function_exists('renderForm')) renderForm($__data) ?>
        </div>
    </div>
<?php
}

include 'main.php';

