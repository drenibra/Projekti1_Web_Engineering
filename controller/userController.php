<?php
    include_once "../repository/userRepository.php";
    include_once '../models/user.php';

    if (isset($_POST['registerBtn'])) {
        $uRepo = new userRepository();

        $users = $uRepo->getAllUsers();
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = 'user';
        $id = $username.rand(100, 999);
        $ekziston = false;
        foreach ($users as $user) {
            if ($user['username'] == $username || $user['email'] == $email) {
                echo '<p style="text-align: center; margin-top:20px; color: red;">Perdoruesi ekziston!</p>';
                echo '<p style="text-align: center; margin-top:10px; color: red;">Provoni email/username tjeter, apo kyçuni</p>';
                echo '<script>
                        $("#modal-signup").css("display", "block");
                        $("main, header, footer").css("filter", "blur(4px)");
                        </script>';
                        exit();    
                $ekziston = true; 
            }
        }
        if (!$ekziston) {
            $user = new User($id, $name, $surname, $email, $username, $password);
            $uRepo->insertUser($user);
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = $role;
            echo "<script>alert('Jeni regjistruar me sukses!');</script>";
            echo "<script> window.location.replace('index.php')</script>";
            exit();
        }
    }
?>