<?php
    include_once '../repository/userRepository.php';
    include_once '../models/user.php';

    if (isset($_POST['registerBtn'])) {
        if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['username'])
        || empty($_POST['password'])) {
            echo "<script>alert('Please fill all fields!')</script>";
        } else {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $id = $username.rand(100, 999);

            $user = new User($id, $name, $surname, $email, $username, $password);
            $userRepository = new UserRepository;
            $userRepository->insertUser($user);

            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
        }
    }
?>