<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rihards</title>
    <!-- Hosted -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Local -->
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}" />
</head>
<body>
    <header>
        <h1 data-aos="zoom-in">Hello, i'm <span class="accent">Rihards Ādminis</span>.</h1>
        <h2 data-aos="zoom-in">I'm a full-stack web developer</h2>
        <a id="down" href="#about" data-aos="zoom-in"><span>View my work &#8595;</span></a>
    </header>
    <!-- ABOUT -->
    <section id="about">
        <div class="about-title">ABOUT</div>
        <div class="about-border"></div>
        <div class="container">
            
            <div class="item" data-aos="fade-up" data-aos-duration="500"><i class="fa fa-rocket fa-5x accent" aria-hidden="true"></i>
                <h1>Fast</h1>
                <p>Fast load times and lag free interaction, my highest priority.</p>
            </div>
            <div class="item" data-aos="fade-up" data-aos-duration="1000"><i class="fa fa-window-restore fa-5x accent" aria-hidden="true"></i>
                <h1>Responsive</h1>
                <p>My layouts will work on any device, big or small.</p>
            </div>
            <div class="item" data-aos="fade-up" data-aos-duration="1500"><i class="fa fa-cogs fa-5x accent" aria-hidden="true"></i>
                <h1>Dynamic</h1>
                <p>Websites don't have to be static, I love making pages come to life.</p>
            </div>
            <div class="item" data-aos="fade-up" data-aos-duration="2000"><i class="fa fa-trash fa-5x accent" aria-hidden="true"></i>
                <h1>Fun</h1>
                <p>Websites don't have to be static, I love making pages come to life.</p>
            </div>
        </div>
        <!-- IMAGE AND LANGUAGES -->
        <div class="container-about">
            <div class="item" data-aos="fade-right" data-aos-duration="1000">
                <img src="../images/portret1.png" class="portret">
                <h2>Who is this guy?</h2>
                <p>I'm a Front-End Freelancer working for fun currently. <br> I'm always willing to learn something new</p>
             </div>

            <div class="text-center item-languages" data-aos="fade-left" data-aos-duration="1000">
                <p>HTML</p><progress max="100" value="80"></progress>
                <p>CSS</p><progress max="100" value="75"></progress>
                <p>JavaScript</p><progress max="100" value="55"></progress>
                <p>Laravel</p><progress max="100" value="50"></progress>
                <p>VueJs</p><progress max="100" value="35"></progress>
                <p>Python</p><progress max="100" value="10"></progress>
                <p>Assembler</p><progress max="100" value="0"></progress>
            </div>
        </div>
    </section> 
    
    
    <!-- PORTFOLIO -->
    <section id="section1">
      <svg width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 0 L50 90 L100 0 V100 H0" fill="#f5f5f5" />
      </svg>
    </section>
    <section id="#portfolio" class="portfolio-bg">
        <!-- TITLE -->
        <div class="about-title">PORTFOLIO</div>
        <div class="about-border"></div>
        <!-- ACTUAL PICTURESA -->
        <div class="container-img">
            <div class="container-hover" data-aos="fade-up">
              <img src="../images/dp.png" class="image-hover">
              <div class="overlay-hover">
                <div class="text-hover">Laravel</div>
                <a href="/index" class="img-link" target="_blank">Link</a>
                
            </div>
            </div>
            <div class="container-hover" data-aos="fade-up">
              <img src="../images/portfolio.png" class="image-hover">
              <div class="overlay-hover">
                <div class="text-hover">Portfolio</div>
                <a href="#" class="img-link">Link</a>
                
            </div>
            </div>
            <div class="container-hover" data-aos="fade-up">
              <img src="../images/meintenance.png" class="image-hover">
              <div class="overlay-hover">
                <div class="text-hover">Meintenance</div>
                <a href="/" class="img-link" target="_blank">Link</a>
                
            </div>
            </div>
        </div>
    </section>
    <!-- CONTACT SECTION -->
    <section id="section2">
      <svg width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 0 L50 90 L100 0 V100 H0" fill="#252934" />
      </svg>
    </section>
    <section class="contact">
      <div class="contact-title">CONTACT</div>
      <div class="about-border"></div>
      <h1 class="contact-text">Have a question or want to work together?</h1>
      <div class="form-container">
        <div class="form-item" data-aos="fade-up" data-aos-duration="500">
          <form>
            <input type="text" placeholder="Name" class=""><br><br>
            <input type="text" placeholder="Enter email" class=""><br><br>
            <textarea id="w3review" rows="4" cols="50"></textarea><br><br>
            <a id="contact-button">Submit</a>
          </form>
        </div>
      </div>
    </section>

    <footer>
        <div class="container">
          <a href="https://github.com/hydratypelvl" target="_blank">
            <div class="nav-item github-color">
              <i class="fa fa-github fa-lg"></i>
            </div>
          </a>
          <a href="https://www.facebook.com/rihards.janis.7" target="_blank">
            <div class="nav-item fb-color">
              <i class="fa fa-facebook fa-lg"></i>
            </div>
          </a>
          <a href="https://instagram.com/rihards.adm/" target="_blank">
            <div class="nav-item ig-color">
              <i class="fa fa-instagram fa-lg"></i>
            </div>
          </a>
        </div>
        <div class="info-box">
          <div class="footer-text">
            RIHARDS ĀDMINIS ©2020
          </div>
        </div>
      </footer>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
</body>
</html>
