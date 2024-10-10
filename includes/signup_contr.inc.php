<!-- <?php

declare(strict_types=1);

function is_input_empty(string $username,string $pws, string $email){
    if (empty($username)  || empty($pws) || empty($email)){
        return true;
    }
    else{
        return false;
    }
}

function is_email_invalid(string $email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }
}
function is_username_taken( object $pdo,string $username){
    if (get_username( $pdo,  $username)){
        return true;
    }
    else{
        return false;
    }
}

function is_email_registerd( object $pdo,string $email){
    if (get_email( $pdo, $email)){
        return true;
    }
    else{
        return false;
    }
}
function create_user( object $pdo,string $pwd, string $username, $email)
   {
    set_user( $pdo, $pwd, $username, $email);
    }
     -->





     <?php

declare(strict_types=1);

function is_input_empty(string $username, string $pwd, string $email): bool {
    return empty($username) || empty($pwd) || empty($email);
}

function is_email_invalid(string $email): bool {
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}

function is_username_taken(object $pdo, string $username): bool {
    return get_username($pdo, $username) !== null; // Should return null if not found
}

function is_email_registerd(object $pdo, string $email): bool {
    return get_email($pdo, $email) !== null; // Should return null if not found
}

function create_user(object $pdo, string $pwd, string $username, string $email): void {
    $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT); // Hash the password
    set_user($pdo, $hashed_pwd, $username, $email);
}
