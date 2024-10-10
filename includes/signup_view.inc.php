<?php

declare(strict_types=1);

function check_signup_errors() {
    
    if (isset($_SESSION['errors_signup']) && !empty($_SESSION['errors_signup'])) {
        echo '<ul>';
        foreach ($_SESSION['errors_signup'] as $error) {
            echo '<li>' . htmlspecialchars($error) . '</li>';
        }
        echo '</ul>';
        // Clear the errors after displaying them

        unset($_SESSION['errors_signup']);
    }else if (isset($_GET["signup"]) && $_GET["signup"]==="success"){
        echo '<br>';
        echo '<p class="from-success">Signup success! </P>';
    }
}