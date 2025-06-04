<?php
session_start();

$input_password = 'Adminganteng123';
$hash_password = '$2y$10$QJ3tWUs/5K8mL3JuRzfpSe0RqW8BvQvMqlvscFrksC2xn1lt9HqCq';

echo "Input Password: [$input_password]\n";
echo "Hash Password: [$hash_password]\n";

if (password_verify($input_password, $hash_password)) {
    echo "Password cocok!";
} else {
    echo "Password tidak cocok!";
}
?>