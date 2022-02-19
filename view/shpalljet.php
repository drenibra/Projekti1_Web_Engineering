<html lang="en">
<?php
  session_start();
?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/default-styles.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/shpalljet-page.css" />
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon" />
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" />
    <title>Gjej Punë!</title>
  </head>
  <body>
    <div class="menu-wrap">
      <input type="checkbox" class="toggler" />
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
      <section class="hero-upper">
        <div class="container">
          <div class="hero-right">
            <div class="flex-responsive">
              <p class="section-introduction">Introducing</p>
              <span class="line"></span>
            </div>
            <h1>Gjej vendin e punës</h1>
          </div>
          <div class="hero-left">
              <div class="flex-responsive">
                <div>
                  <label for="qytetet">Qytetet</label>
                  <select name="qytetet" id="qytetet">
                      <option value="prishtina">Prishtina</option>
                      <option value="Gjilani">Gjilani</option>
                      <option value="Prizren">Prizren</option>
                      <option value="Mitrovicë">Mitrovicë</option>
                      <option value="Gjakovë">Gjakovë</option>
                      <option value="Pejë">Pejë</option>
                      <option value="Suharekë">Suharekë</option>
                      <option value="Ferizaj">Ferizaj</option>
                      <option value="Deçan">Deçan</option>
                      <option value="Vitina">Vitina</option>
                      <option value="Istok">Istok</option>
                      <option value="Shtime">Shtime</option>
                      <option value="Podujeva">Podujeva</option>
                      <option value="Dragash">Dragash</option>
                      <option value="Vushtrri">Vushtrri</option>
                      <option value="Orahovac">Orahovac</option>
                      <option value="Llazicë">Llazicë</option>
                      <option value="Leposaviq">Leposaviq</option>
                      <option value="fusheKosove">Fushë Kosovë</option>
                  </select>
                </div>
                <div>
                  <label for="fusha">Fusha</label>
                  <select name="fusha" id="fusha">
                    <option value="programim">Programim</option>
                    <option value="arkitekture">Arkitekture</option>
                    <option value="agrikulture">Agrikulture</option>
                  </select>
                </div>
                <div>
                  <label for="pervoja">Pervoja</label>
                  <select name="pervoja" id="pervoja">
                    <option value="fillestar">Fillestar — Intern</option>
                    <option value="mesatar">Mesatar</option>
                    <option value="advanced">Advanced</option>
                    <option value="ekspert">Ekspert</option>
                  </select>
                </div>
              </div>
              <button class="btn action fullWidth">KËRKO PUNË</button>
          </div>
        </div>
        <div class="container">
          <div class="navbar-buttons" <?php if(isset($_SESSION['username'])) echo'style="display:none"'; ?>>
            <button class="btn default loginBtn">Kyçu</button>
            <button class="btn action signupBtn">Krijo Llogari</button>
          </div>
        </div>
      </section>
      <section class="hero">
        <div class="container">
          <div class="hero-articles">
            <article class="shpallje-articles_article">
              <img src="img/programer.jpg" alt="job-image" />
              <div class="article_info">
                <h4>Front-End Developer</h4>
                <div class="article_info-location">
                  <p class="section_paragraph-text">Cacttus</p>
                  <div class="flex">
                    <img src="img/location.svg" alt="location-icon">
                    <span>Prishtinë</span>
                  </div>
                </div>
                <div class="article_info-hours flex">
                  <img class="svg-primary_color" src="img/clock.svg" alt="location-icon">
                  <span>Full Time</span>
                </div>
              </div>
            </article>
            <article class="shpallje-articles_article">
              <img src="img/architect.jpg" alt="job-image" />
              <div class="article_info">
                <h4>Architect and 3D Visualizer</h4>
                <div class="article_info-location">
                  <p class="section_paragraph-text">Design Studio</p>
                  <div class="flex">
                    <img src="img/location.svg" alt="location-icon">
                    <span>Prishtinë</span>
                  </div>
                </div>
                <div class="article_info-hours flex">
                  <img class="svg-primary_color" src="img/clock.svg" alt="location-icon">
                  <span>Full Time</span>
                </div>
              </div>
            </article>
            <article class="shpallje-articles_article">
              <img src="img/data-science.jpg" alt="job-image" />
              <div class="article_info">
                <h4>Data Scientist</h4>
                <div class="article_info-location">
                  <p class="section_paragraph-text">Data Center</p>
                  <div class="flex">
                    <img src="img/location.svg" alt="location-icon">
                    <span>Prishtinë</span>
                  </div>
                </div>
                <div class="article_info-hours flex">
                  <img class="svg-primary_color" src="img/clock.svg" alt="location-icon">
                  <span>Full Time</span>
                </div>
              </div>
            </article>
            <article class="shpallje-articles_article">
              <img src="img/dentist.jpg" alt="job-image" />
              <div class="article_info">
                <h4>Dentist</h4>
                <div class="article_info-location">
                  <p class="section_paragraph-text">DentaKs</p>
                  <div class="flex">
                    <img src="img/location.svg" alt="location-icon">
                    <span>Prishtinë</span>
                  </div>
                </div>
                <div class="article_info-hours flex">
                  <img class="svg-primary_color" src="img/clock.svg" alt="location-icon">
                  <span><span style="color: var(--primary)">Part</span> Time</span>
                </div>
              </div>
            </article>
            <article class="shpallje-articles_article">
              <img src="img/school-psychologist.jpg" alt="job-image" />
              <div class="article_info">
                <h4>Psikolog Shkolle</h4>
                <div class="article_info-location">
                  <p class="section_paragraph-text">Viva Fresh</p>
                  <div class="flex">
                    <img src="img/location.svg" alt="location-icon">
                    <span>Prishtinë</span>
                  </div>
                </div>
                <div class="article_info-hours flex">
                  <img class="svg-primary_color" src="img/clock.svg" alt="location-icon">
                  <span>Full Time</span>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>
    </main>  
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/app.js"></script>
    <?php include_once "../controller/modal.php"; ?>
  </body>
</html>
