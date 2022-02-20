<html lang="en">
<?php
  session_start();
?>
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/default-styles.css"/>
    <link rel="stylesheet" href="css/about-us_page.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css"/>
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon"/>
    <title>Rreth Nesh - Gjej Punë!</title>
  </head>
  <body>
    <div class="menu-wrap">
      <input type="checkbox" class="toggler"/>
      <div class="hamburger"><div class="hamburgerDiv"></div></div>
      <div class="menu">
        <div>
          <div>
            <ul>
              <a href="index.php" class="hamburgerItem"><li>Home</li></a>
              <a href="shpalljet.php" class="hamburgerItem"><li>Shpalljet</li></a>
              <a href="about-us.php" class="hamburgerItem"><li>Rreth Nesh</li></a>
              <a href="contact.php" class="hamburgerItem"><li>Kontakt</li></a>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <header>
      <nav class="container">
        <a href="index.php"><h3>GjejPunë.net</h3></a>
        <ul class="navbar-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="shpalljet.php">Shpalljet</a></li>
          <li><a href="about-us.php">Rreth Nesh</a></li>
          <li><a href="contact.php">Kontakt</a></li>
        </ul>
        <?php include_once "../controller/loginButtons.php";?>
      </nav>
    </header>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero-content">
            <h1>rreth nesh</h1>
            <h4>Mësoni më shumë rreth etikës sonë të punës si dhe mundësitë që ofrojmë</h4>
          </div>
        </div>
      </section>
      <section class="about-us">
        <div class="container flex">
            <div class="about-us_left">
              <h2>Kush Jemi Ne?</h2>
              <p class="section_paragraph-text">
                GjejPunë ofron Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Consectetur impedit blanditiis doloremque perferendis, laboriosam magni repudiandae reprehenderit labore 
                libero iure tenetur eveniet omnis asperiores nulla ab tempore sint? Rem, earum?
              </p>
              <h2>Pse GjejPunë?</h2>
                <p class="section_paragraph-text">
                    Mundësitë më të mira për studentë Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Officiis quibusdam quasi deleniti cumque ullam rem maiores. Non reiciendis consequuntur sint 
                    molestiae ducimus ex, nobis nam in sapiente esse ipsam vero?
                </p>
            </div>
            <div class="about-us_right">
                <button class="btn action signupBtn">Abonohu</button>
                <a class="btn" href="contact.php">Kontakto</a>
                <p class="section_paragraph-text">Jeni anëtar? <span class="loginBtn">Kyçu</span></p>
                <div class="links">
                    <a href="https://www.instagram.com"><img src="img/instagram.svg" alt="instagram-logo"/></a>
                    <a href="https://www.youtube.com"><img src="img/youtube.svg" alt="youtube-logo"/></a>
                    <a href="https://www.facebook.com"><img src="img/facebook.svg" alt="facebook-logo"/></a>
                </div>
            </div>
        </div>
      </section>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/app.js"></script>
    <?php include_once "../controller/loginModal.php";
      include_once "../controller/signupModal.php"; ?>
  </body>
</html>