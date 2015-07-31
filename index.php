<!DOCTYPE html>
<?php
$projects = array();
$projects["Uniquely Chic Furniture"] = array(
    "img_src" => "img/uniquely_chic_furniture.png",
    "modal_img_src" => "img/uniquely_chic_furniture_modal.jpg",
    "name" => "Uniquely Chic Furniture",
    "id" => "uniquely_chic_furniture",
    "desc" => "Uniquely Chic Furniture is a furniture refinishing company. I built their website with Wordpress, creating a child theme from the popular Virtue theme. Additionally, I added plugins, including an e-commerce plugin that linked their Etsy store to their new website.",
    "source_code" => false,
    "demo" => false,
    "site" => true,
    "site_href" => "http://uniquelychicfurniture.com"
);
$projects["MJM General Contracting"] = array(
    "img_src" => "img/mjm_general_contracting.png",
    "modal_img_src" => "img/mjm_general_contracting_modal.jpg",
    "name" => "MJM General Contracting",
    "id" => "mjm_general_contracting",
    "desc" => "MJM General Contracting is a website that I built with Bootstrap. It is based on the Worthy template for Bootstrap, which I customized to suit the particular needs of the hypothetical MJM General Contracting company.",
    "source_code" => false,
    "demo" => true,
    "demo_href" => "portfolio/mjm_general_contracting/index.html",
    "site" => false
);
$projects["Iron Dome"] = array(
    "img_src" => "img/iron_dome.png",
    "modal_img_src" => "img/iron_dome_modal.jpg",
    "name" => "Iron Dome",
    "id" => "iron_dome",
    "desc" => "Iron Dome is a website that I built with Bootstrap. The styling is entirely my own, although I have drawn inspiration for it from other sites around the web.",
    "source_code" => false,
    "demo" => true,
    "demo_href" => "portfolio/iron_dome/index.html",
    "site" => false
);
$projects["Bubbly Login"] = array(
    "img_src" => "img/bubbly_login.png",
    "modal_img_src" => "img/bubbly_login_modal.jpg",
    "name" => "Bubbly Login",
    "id" => "bubbly_login",
    "desc" => "The Bubbly Login page is a neat login demo that features an animated background on large screens and browsers that support CSS3 transforms. It does not actually provide any login functionality; rather, it&rsquo;s just a neat design.",
    "source_code" => true,
    "source_code_href" => "https://github.com/MichaelManhire/simple-css-animated-bg",
    "demo" => true,
    "demo_href" => "portfolio/bubbly_login/index.html",
    "site" => false
);
$projects["Pomodoro Timer"] = array(
    "img_src" => "img/pomodoro_timer.png",
    "modal_img_src" => "img/pomodoro_timer_modal.jpg",
    "name" => "Pomodoro Timer",
    "id" => "pomodoro_timer",
    "desc" => "The Pomodoro Timer is a JavaScript web app that schedules work/study times and breaks in accordance with the <a href='https://en.wikipedia.org/wiki/Pomodoro_Technique'>Pomodoro Technique</a>.",
    "source_code" => true,
    "source_code_href" => "https://github.com/MichaelManhire/javascript-pomodoro-timer",
    "demo" => true,
    "demo_href" => "portfolio/pomodoro_timer/index.html",
    "site" => false
);
$projects["Just Do It"] = array(
    "img_src" => "img/just_do_it.png",
    "modal_img_src" => "img/just_do_it_modal.jpg",
    "name" => "Just Do It",
    "id" => "just_do_it",
    "desc" => "Just Do It is a JavaScript web app that provides a fully functional to-do list. Users can add tasks to the list, mark tasks as completed, delete tasks from the list, and edit tasks as needed.",
    "source_code" => true,
    "source_code_href" => "https://github.com/MichaelManhire/javascript-to-do-list",
    "demo" => true,
    "demo_href" => "portfolio/just_do_it/index.html",
    "site" => false
);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Michael Manhire | Front-End Web Developer</title>
        <meta name="author" content="Michael Manhire">
        <meta name="description" content="Michael Manhire is a front end web developer based in San Diego, California. Learn more about his skills and experience in creating websites.">
        <meta name="robots" content="index, follow">
        <meta property="og:title" content="Michael Manhire | Web Developer">
        <meta property="og:description" content="Michael Manhire is a front end web developer based in San Diego, California. Learn more about his skills and experience in creating websites.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://www.michaelmanhire.com/">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@Michael_Manhire">
        <meta name="twitter:title" content="Michael Manhire | Web Developer">
        <meta name="twitter:description" content="Michael Manhire is a front end web developer based in San Diego, California. Learn more about his skills and experience in creating websites.">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <!--<![endif]-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/base-min.css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans%7CSource+Sans+Pro:300" rel="stylesheet" type="text/css">
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
        <link rel="shortcut icon" href="favicon.ico">
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
        <main class="remodal-bg">
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
                        <a href="#" id="<?php echo $project["id"] ?>">
                            <img class="pure-img" src="<?php echo $project["img_src"] ?>" alt="<?php echo $project["name"] ?>">
                        </a>
                    </div>
                    <?php } ?>
                </div>
                <?php foreach ($projects as $project) { ?>
                    <div class="remodal" data-remodal-id="<?php echo $project["id"] ?>">
                        <button data-remodal-action="close" class="remodal-close"></button>
                        <h3><?php echo $project["name"] ?></h3>
                        <img src="<?php echo $project["modal_img_src"] ?>" class="pure-img" alt>
                        <p><?php echo $project["desc"] ?></p>
                        <br>
                        <?php if ($project["source_code"]) { echo "<a href='$project[source_code_href]' target='_blank' class='pure-button pure-button-primary'>View Source Code</a>"; } ?>
                        <?php if ($project["demo"]) { echo "<a href='$project[demo_href]' target='_blank' class='pure-button pure-button-primary'>View Demo</a>"; } ?>
                        <?php if ($project["site"]) { echo "<a href='$project[site_href]' target='_blank' class='pure-button pure-button-primary'>View Website</a>"; } ?>
                    </div>
                <?php } ?>
            </section>
            <section id="about" class="about">
                <h2>About</h2>
                <img class="pure-img" src="img/michael.jpg" alt="Michael Manhire">
                <p class="paragraph">Hey, I&rsquo;m Michael. I&rsquo;ve been learning web development for about a year, concentrating mainly on the front end languages of HTML, CSS, and JavaScript. This website serves as a repository for my web projects. Currently, web development is one of my hobbies, but I aspire to someday make it my career. Thanks for visiting!</p>
                <a href="pdf/resume.pdf" target="_blank" class="pure-button">
                    <span aria-hidden="true" data-icon="&#xe800;" class="icon-pdf"></span>
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
        <script src="js/smooth-scroll.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            // Change the default scrolling behavior when the user clicks on a nav link
            smoothScroll.init({
                speed: 1000,
                easing: 'easeInOutCubic',
                offset: 55
            });
        </script>
        <script src="js/remodal.min.js"></script>
        <script src="js/events.js"></script>
        <script src="//static.getclicky.com/js" type="text/javascript"></script>
        <script type="text/javascript">try{ clicky.init(100852129); }catch(e){}</script>
    </body>
</html>