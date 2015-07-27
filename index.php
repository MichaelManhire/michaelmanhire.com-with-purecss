<!DOCTYPE html>
<?php
$projects = array();
$projects["Uniquely Chic Furniture"] = array(
    "src" => "img/uniquely_chic_furniture.png",
    "alt" => "Uniquely Chic Furniture"
);
$projects["MJM General Contracting"] = array(
    "src" => "img/mjm_general_contracting.png",
    "alt" => "MJM General Contracting"
);
$projects["Iron Dome"] = array(
    "src" => "img/iron_dome.png",
    "alt" => "Iron Dome"
);
$projects["Bubbly Login"] = array(
    "src" => "img/bubbly_login.png",
    "alt" => "Bubbly Login"
);
$projects["Pomodoro Timer"] = array(
    "src" => "img/pomodoro_timer.png",
    "alt" => "Pomodoro Timer"
);
$projects["Just Do It"] = array(
    "src" => "img/just_do_it.png",
    "alt" => "Just Do It"
);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Michael Manhire | Front-End Web Developer</title>
<!--
        <meta name="author" content="[author]">
        <meta name="description" content="[description]">
        <meta name="robots" content="[robots]">
        <meta property="og:title" content="[title]">
        <meta property="og:type" content="website">
        <meta property="og:image" content="[image]">
        <meta property="og:url" content="[url]">
        <meta property="og:description" content="[description]">
        <meta property="og:site_name" content="[site_name]">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="[site]">
        <meta name="twitter:creator:id" content="[creator]">
-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <!--<![endif]-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/base-min.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300|Open+Sans' rel='stylesheet' type='text/css'>
	    <link rel="stylesheet" type="text/css" href="css/style.css">
        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie8.css">
        <![endif]-->
        <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie9.css">
        <![endif]-->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <nav class="pure-menu pure-menu-horizontal">
                <ul class="pure-menu-list">
                    <li class="pure-menu-item"><a href="#projects" class="pure-menu-link" data-scroll>Projects</a></li>
                    <li class="pure-menu-item"><a href="#about" class="pure-menu-link" data-scroll>About</a></li>
                    <li class="pure-menu-item"><a href="#contact" class="pure-menu-link" data-scroll>Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="intro">
                <div class="animated fadeIn">
                    <h1 class="animated fadeInDown">Hi, I'm Michael Manhire</h1>
                    <p class="animated fadeInUp">I create beautiful, functional websites and web applications.</p>
                </div>
            </section>
            <section id="projects" class="projects">
                <h2>Projects</h2>
                <div class="pure-g">
                    <?php foreach ($projects as $project) { ?>
                    <div class="pure-u-1 pure-u-sm-1-2 pure-u-lg-1-3 project">
                        <a href="#">
                            <img class="pure-img" src="<?php echo $project["src"] ?>" alt="<?php echo $project["alt"] ?>">
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </section>
            <section id="about" class="about">
                <h2>About</h2>
                <img class="pure-img" src="img/michael.jpg" alt="Michael Manhire">
                <p class="paragraph">Hey, I&rsquo;m Michael. I&rsquo;ve been learning web development for about a year, concentrating mainly on the front end languages of HTML, CSS, and JavaScript. This website serves as a repository for my web projects. Currently, web development is one of my hobbies, but I aspire to someday make it my career. Thanks for visiting!</p>
                <a href="pdf/resume.pdf" target="_blank" class="pure-button">
                    <span aria-hidden="true" data-icon="&#xe800" class="icon-pdf"></span>
                    Download My Resume
                </a>
            </section>
            <section id="contact" class="contact clearfix">
                <h2>Contact</h2>
                <p class="paragraph">I&rsquo;m a front end web developer based in San Diego, <abbr title="California">CA</abbr>. If you&rsquo;d like to contact me, please fill out the form below.</p>
                <form class="pure-form pure-form-stacked" action="php/contact.php" method="post">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="pure-input-1-2" required>
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="pure-input-2-3" required>
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="pure-input-1" rows="8" required></textarea>
                    <button type="submit" name="submit" class="pure-button">Submit</button>
                </form>
            </section>
        </main>
        <footer>
            <div class="pure-g">
                <div class="pure-u-1-3 footer-item">
                    <a href="https://twitter.com/Michael_Manhire" target="_blank" class="twitter"><span aria-hidden="true" data-icon="&#xe801;" class="icon-twitter"></span></a>
                </div>
                <div class="pure-u-1-3 footer-item">
                    <a href="https://github.com/MichaelManhire" target="_blank" class="github"><span aria-hidden="true" data-icon="&#xe802;" class="icon-github"></span></a>
                </div>
                <div class="pure-u-1-3 footer-item">
                    <a href="https://www.linkedin.com/pub/michael-manhire/a7/583/528" target="_blank" class="linkedin"><span aria-hidden="true" data-icon="&#xe803;" class="icon-linkedin"></span></a>
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript">
            var form = $("form");
            // Post form data to contact.php, display success message in response
            form.submit(function(e) {
                e.preventDefault();
                var url = $(this).attr("action");
                var formData = $(this).serialize();
                $.post(url, formData, function(response) {
                   form.html('<p class="success animated fadeIn">Message received! Thanks!</p>'); 
                });
            });
        </script>
        <script src="js/smooth-scroll.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            /*  Changes the default scrolling behavior when the user clicks on a nav link */
            smoothScroll.init({
                speed: 1000,
                easing: 'easeInOutCubic',
                offset: 55
            });
        </script>
    </body>
</html>