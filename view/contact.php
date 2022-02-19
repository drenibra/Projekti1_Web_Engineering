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
    <link rel="stylesheet" href="css/contact-page.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css"/>
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon"/>
    <title>Kontakt - Gjej Punë!</title>
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
              <a href="#" class="hamburgerItem"><li>Shpalljet</li></a>
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
          <li><a href="#">Shpalljet</a></li>
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
            <h1>na kontaktoni rreth pyetjeve që keni</h1>
            <h4>Ne kemi deshirë të ju ndihmojmë për gjetje të punës</h4>
          </div>
        </div>
      </section>
      <section class="form-section">
        <div class="container">
          <div class="flex-responsive">
            <div class="form-section_left">
              <div class="form-section_left--item flex">
                <img class="svg-primary_color" src="img/phone.svg" alt="phone" />
                <div>
                  <p>Thirrni ne</p>
                  <a href="#">+383 44 xxx xxx</a>
                </div>
              </div>
              <div class="form-section_left--item flex">
                <img class="svg-primary_color" src="img/chat.svg" alt="phone"/>
                <div>
                  <p>Ose komunikoni me neve</p>
                  <button class="btn action">Chat</button>
                </div>
              </div>
            </div>
            <div class="form-section_right">
              <h2>Rezervoni nje takim</h2>
              <p>
                Për të planifikuar kohën për të folur me një nga përfaqësuesit
                tanë të shitjeve, plotësoni formularin, më pas klikoni "tjetër"
                për të zgjedhur një datë dhe orë që funksionon për ju.
              </p>
              <form action="">
                <div class="flex-responsive">
                  <div>
                    <label for="emri">Emri</label>
                    <input required type="text" id="emri"/>
                  </div>
                  <div>
                    <label for="mbiemri">Mbiemri</label>
                    <input required type="text" id="mbiemri"/>
                  </div>
                </div>
                <div class="flex-responsive">
                  <div>
                    <label for="email">Email</label>
                    <input required type="text" id="email"/>
                  </div>
                  <div>
                    <label for="nrTelefonit">Nr. Telefonit</label>
                    <input required type="text" id="nrTelefonit"/>
                  </div>
                </div>
                <div class="flex-responsive">
                  <div>
                    <label for="titulli">Titulli i Punës</label>
                    <input required type="text" id="titulli"/>
                  </div>
                  <div>
                    <label for="vitet">Vitet e Pervojës</label>
                    <input required type="number" id="vitet"/>
                  </div>
                </div>
                <input type="submit" class="btn action maxwidth" value="Send"/>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/app.js"></script>
    <?php include_once "../controller/modal.php"; ?>
  </body>
</html>
