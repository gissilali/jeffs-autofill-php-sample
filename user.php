<?php

$database = require "bootstrap.php";
try {
    $user = $database->findOne("users", "admission_number", $_GET['admission_number']);
    echo json_encode($user);
} catch (Exception $exception) {
    die($exception->getMessage());
}
