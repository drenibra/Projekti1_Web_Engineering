<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/default-styles.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Dashboard</title>
    <style>
        * , *:before, *:after{ 
            box-sizing:border-box; 
            -moz-box-sizing:border-box; 
            -webkit-box-sizing:border-box; 
            -ms-box-sizing:border-box;
        }
        header {
            font-family: "Montserrat";
            color: white;
            width: 30%;
            float: left;
            height: 100vh;
            margin: unset;
            background-color: rgb(226, 226, 226);
        }
        nav.container {
            background-color: var(--primary);
            flex-direction: column;
            padding: 10px;
            width: 100%;
            margin: unset;
            align-items: unset;
        }
        nav.container h3 {
            color: white;
            font-family: "Montserrat";
            font-weight: 500;
        }
        nav.container h4 {
            color: white;
        }
        nav h5 {
            font-weight: 400;
            font-size: 1.2rem;
        }
        nav p {
            font-weight: 100;
        }
        .admin-info {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px 0;
        }
        .admin-info h5 {
            padding: 8px 0;
        }
        .admin-info img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }
        .admin-list {
            font-weight: 500;
            color: black;
            padding: 20px 0;
        }
        .admin-list li {
            padding: 10px 20px;
            transition: all 0.1s ease-in-out;
        }
        main {
            width: 70%;
            float: right;
        }
        table tr {
            border: 1px solid black;
        } main h2 {
            font-family: "Montserrat";
        }
        .active-option {
            background: rgb(16 55 92);
            color: white;
        }
        .admin-list li:hover {
            background: rgb(16 55 92 / 36%);
        }
    </style>
</head>
<body>
    <header>
        <nav class="container">
            <div>
                <div>
                    <a href="index.php"><h4>GjejPunë.net</h4></a>
                    <h3>Dashboard</h3>
                </div>
                <div class="admin-info">
                    <img src="img/dren_ibrahimi.jpeg" alt="user1">
                    <h5>Dren Ibrahimi</h5>
                    <p>Admin - Full Stack</p>
                </div>
            </div>
        </nav>
        <ul class="admin-list">
            <li class="active-option">Perdoruesit</li>
            <li>Kompanite</li>
            <li>Lajmet</li>
            <li>Shpalljet</li>
            <li>Kritikat</li>
        </ul>
    </header>
    <main>
        <div class="container">
            <div class="dashboard-Perdoruesit">    
                <h2>Perdoruesit</h2>
                <div>
                    <table class="styled-table">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                            include_once "../repository/userRepository.php";
                            $uRepo = new userRepository();

                            $users = $uRepo->getAllUsers();

                            foreach ($users as $user) {
                                echo 
                                "<tr>
                                    <td>$user[id]</td>
                                    <td>$user[name]</td>
                                    <td>$user[surname]</td>
                                    <td>$user[email]</td>
                                    <td>$user[username]</td>
                                    <td>$user[password]</td>
                                    <td>$user[role]</td>
                                    <td><a href='dashboard.php?x=edit&id=$user[id]'>Edit</a></td>
                                    <td><a href='deleteUser.php?id=$user[id]'>Delete</a></td>
                                </tr>";
                            }
                        ?>
                    </tr>
                    </tbody>
                </table>
                </div>
                <div>
                    <?php
                        if (isset($_GET['x'])) {
                            switch ($_GET['x']) {
                                case 'edit';
                                include_once "edit.php";    
                            }
                        } 
                    ?>
                </div>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script>
        $(".admin-list li").click(function () {
            $(".admin-list li").removeClass("active-option");
            $(this).addClass("active-option");
            $(this).text();
            $('*[class^="dashboard"]').css("display", "none");
            $(`.dashboard-${$(this).text()}`).css("display", "block");
        })
    </script>
</body>
</html>