<?php
class PasswordException extends Exception {}
function validatePassword($password) {
    if (strlen($password) < 8) throw new PasswordException("Password must be at least 8 characters long");
    if (!preg_match('/[A-Z]/', $password)) throw new PasswordException("Password must contain at least one uppercase letter");
    if (!preg_match('/\d/', $password)) throw new PasswordException("Password must contain at least one digit");
    if (!preg_match('/[@#$%]/', $password)) throw new PasswordException("Password must contain at least one special character");
    echo "Password is valid";
}
try {
    validatePassword("Pass@123");
} catch (PasswordException $e) {
    echo $e->getMessage();
}
?>

