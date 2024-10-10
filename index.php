<?php

require_once 'includes/config_session.inc.php';
require_once 'includes/signup_model.inc.php';
require_once 'includes/signup_view.inc.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/# main.css">
    <title>Document</title>
    <style>
        /* Style for the body */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f8ff; /* Light blue background */
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

/* Style for headings */
h3 {
    color: #333;
    text-align: center;
    margin-bottom: 10px;
}

/* Style for the forms */
form {
    width: 300px;
    margin: 20px 0;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Style for input fields */
input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Style for the button */
button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50; /* Green color */
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

/* Button hover effect */
button:hover {
    background-color: #45a049;
}

    </style>

</head>


<body>
    <h3>Login</h3>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
         <input type="password" name="pwd" placeholder="Password">
         
          <button>Login</button>
</form>


<h3>Signup</h3>

<form action="includes/signup.inc.php" method="post">
        <input required type="text" name="username" placeholder="Username">
         <input type="password" name="pwd" placeholder="Password">
          <input type="text" name="email" placeholder="Email">
          <button>Signup</button>
</form>


<?php
check_signup_errors();


?>



</body>
</html>
