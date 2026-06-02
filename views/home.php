<?php

function renderForm(array $__data)
{
    extract($__data);
?>
    <?php if (empty($user)) { ?>
        <div class="card">
            <div class="card-header">
                Welcome!
            </div>

            <div class="card-body">
                <p class="card-text">
                    Please <a href="index.php/sign-in" class="link">sign in</a> or <a href="index.php/sign-up" class="link">register</a>.
                </p>
            </div>
        </div>
    <?php } else { ?>
        <div class="card">
            <div class="card-header">
                Welcome, <?= htmlspecialchars($user['name']) ?>!
            </div>

            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    <?php } ?>
<?php
}

include 'templates/main-form.php';

