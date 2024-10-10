<?php

declare(strict_types=1);

function get_username(object $pdo, string $username){
  
    $query = "SELECT username FROM 	members WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindparam( "username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO:: FETCH_ASSOC);
    return $result;
}

function get_email(object $pdo, string $email){
  
    $query = "SELECT username FROM 	members WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindparam( "email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO:: FETCH_ASSOC);
    return $result;
}
function set_user( object $pdo, string  $pwd,$username, $email ){
    $query = "INSERT INTO members (username, email, password) VALUES 
    (:username, :pwd, :email;";
    $stmt = $pdo->prepare($query);


    $options = [
        'cost' => 12
    ];
    $hashedpwd = password_hash( $pwd, PASSWORD_BCRYPT, $options);


    $stmt->bindparam( ":username", $$username);
    $stmt->bindparam( ":pwd", $hashedpwd);
    $stmt->bindparam( ":email", $$email);
    $stmt->execute();

}