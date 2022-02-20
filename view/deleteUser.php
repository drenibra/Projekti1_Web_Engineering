<?php
    include_once '../repository/userRepository.php';

    $ur = new UserRepository();

    $userId = $_GET['id'];
    $userUndo = $ur->getUserById($userId);

    $ur->deleteUser($userId);
?>