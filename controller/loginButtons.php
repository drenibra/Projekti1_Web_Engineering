<?php
    if(!isset($_SESSION['username'])) {
?>
        <div class="navbar-buttons">
            <button class="btn default loginBtn">Kyçu</button>
            <button class="btn action signupBtn">Krijo Llogari</button>
        </div>
        <?php
    }
    else {
        ?>
        <div class="navbar-buttons">
            <a href="../controller/logout.php" class="btn default">Log Out</a>
        </div>
        <?php
    }
?>