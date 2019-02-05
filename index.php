<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bryant Fukushima</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,500,600" rel="stylesheet" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="">
                <img src="assets/imgs/logo-colored.svg" alt="B Logo" />
                <div class="navbar-brand-name">
                    <p class="navbar-brand-name__first">Bryant</p>
                    <p class="navbar-brand-name__last">Fukushima</p>
            </a>
        </div>
        </div>

        <ul class="navbar-links">
            <li><a href="#">HOME</a></li>
            <li><a href="#projects">PROJECTS</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>

    </nav>

    <header class="header">
        <hr class="line-l">
        <h1>Aspiring Front-end Developer / Designer</h1>
        <p>Design to inspire, develop to aid.</p>
        <a class="btn-primary" href="#projects">See my work -></a>
        <hr class="line-r">
        <div class="header-logo">
            <img src="assets/imgs/logo.svg" alt="Header Logo">
        </div>
    </header>

    <div class="summary main-padding">
        <div class="summary-text">
            <h2>Hello, I'm Bryant. Nice to meet you.</h2>
            <p>I recently graduated from the UC Berkeley Full-Stack Web Development Bootcamp in December 2018 logging
                500+ hours of coding time within 7 months. I’m a quick and enthusiastic learner who stays committed.</p>
        </div>
    </div>



    <div class="projects" id="projects">
        <h2>Projects</h2>
        <div class="project">
            <div class="project-text project-text__left">
                <h3>The Pure Gear</h3>
                <p>Wordpress, HTML, JS, CSS, PHP</p>
                <p>Wordpress custom theme development and design for a sustainable outdoor gear review blog.</p>
                <div class="project-links">
                    <a href="https://thepuregear.com/" target="_blank">Website</a>
                </div>
            </div>
            <div class="project-img project-img__right">
                thsi is adf
            </div>
        </div>

        <div class="project">
            <div class="project-text project-text__right">
                <h3>Surf Scraper</h3>
                <p>HTML, CSS, JS, Node, Express</p>
                <p>Conceptual website development and design. Scrapes Surfer.com for featured articles which then
                    allows users to comment.</p>
                <div class="project-links">
                    <a href="https://surf-scraper.herokuapp.com/" target="_blank">Website</a> |
                    <a href="https://github.com/BryantFukushima/mongo-scrape" target="_blank">GitHub</a>
                </div>
            </div>
            <div class="project-img project-img__left">
                thsi is adf
            </div>
        </div>

        <div class="project">
            <div class="project-text project-text__left">
                <h3>GifTastic</h3>
                <p>HTML, CSS, JS</p>
                <p>Conceptual website development and design. Retrieves movies summaries and related GIFs using OMDB
                    and Giphy APIs.</p>
                <div class="project-links">
                    <a href="https://gifmov-awesome.herokuapp.com/" target="_blank">Website</a> |
                    <a href="https://github.com/BryantFukushima/GifTastic" target="_blank">GitHub</a>
                </div>
            </div>
            <div class="project-img project-img__right">
                thsi is adf
            </div>
        </div>
    </div>
    <div class="about" id="about">
            <h2>About</h2>
            <div class="about-info">
                <div class="about-info__develop">
                    <h3>Developer</h3>
                    <p>I enjoy bringing designs and ideas to life on the web. I love developing applications to aid
                        user’s lives in any way I can. </p>
                    <p>Dev Technologies and Tools:</p>
                    <p>HTML, CSS/Sass, Javascript, Git, GitHub, and Terminal.</p>
                </div>
            </div>

            <div class="about-info">
                <div class="about-info__design">
                    <h3>Designer</h3>
                    <p>Geometric simplistic design. I enjoy brand design, web design, and photography.</p>
                    <p>Design Tools:</p>
                    <p>Illustrator, Photoshop, Lightroom, InDesign, AdobeXD, and Pen & Paper.</p>
                </div>
            </div>

        </div>

        <div class="contact" id="contact">
            <h2>Contact</h2>
            <form class="contact-form" method="POST" action="<?= $SERVER['PHP_SELF']; ?>">
                <div class="contact-form-info">
                    <div class="contact-form-info__person">
                        <input type="text" name="name" id="" placeholder="Full Name">
                        <input type="email" name="email" id="" placeholder="E-Mail">
                    </div>
                    <div class="contact-form-info__message">
                        <textarea name="message" id="" placeholder="Message..."></textarea>
                    </div>
                </div>
                <input class="btn-primary contact-form-button" type="submit" name="submit" value="Send">
            </form>
            <?php
            ini_set("SMTP", "aspmx.l.google.com");
            ini_set("sendmail_from", "bmfukushima94@gmail.com");
                if(isset($_POST['submit']))
                {
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $message=$_POST['message'];
                    $to='bmfukushima94@gmail.com';
                    $headers='Reply-to:$email';
                    mail($to, 'Contacted by'.$name, $message, $headers);
                }

            ?>
        </div>

        <div class="footer">
            <img class="footer-img" src="assets/imgs/logo.svg" alt="Footer Logo">
            <div class="footer-links">
                <a href="https://github.com/BryantFukushima" target="_blank">GitHub</a> | 
                <a href="https://www.linkedin.com/in/bryant-fukushima/" target="_blank">LinkedIn</a> | 
                <a href="assets/imgs/Bryant_Fukushima_Resume.pdf" target="_blank">Resume</a>
                <p class="footer-copy">Creation by B &copy; twenty-nineteen</p>
            </div>
        </div>
</body>

</html>