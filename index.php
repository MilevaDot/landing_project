<?php

require("mail.php"); 

function validate($name, $email, $subject, $message, $form) {
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";

if ( isset($_POST["form"]) ) {
    if ( validate(...$_POST) ) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $body = "$name <$email> send you the message: <br><br> $message";

        // Send email
        sendMail($subject,$body,$email,$name,true);
        $status = "success";
    }
    else {
        $status = "danger";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>River Jeans | Home</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    
    <!-- HEADER MENU -->
    <header>
        <div class="container_header">
            <div class="logo">
                <a href="#">
                    <img src="./assets/img/logo.png" alt="logo">
                </a>
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a data-scroll="home" class="active" href="#home">Home</a></li>
                        <li><a data-scroll="about" href="#about">About</a></li>
                        <li><a data-scroll="products" href="#products">Products</a></li>
                        <li><a data-scroll="services" href="#services">Services</a></li>
                        <li><a data-scroll="contact" href="#contact">Contact</a></li>
                    </ul>
                </nav>

                <div class="social_media">
                    <a href="">
                        <img src="./assets/img/facebook.png" alt="facebook">
                    </a>
                    <a href="">
                        <img src="./assets/img/instagram.png" alt="instagram">
                    </a>
                    <a href="">
                        <img src="./assets/img/twitter.png" alt="twitter">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>

        <!-- BEGIN -->
        <!-- HOME -->
        <div class="container_cover div_offset" id="home">
            <div class="cover">
                <section class="text_cover">
                    <h1>The best tatoo shop in the world!</h1>
                    <p>If you want to show the better shape of your body, you only need to make happy your body with us.</p>
                    <a href="#" class="btn_text-cover btn_text">Be elegant</a>
                </section>
                <section class="image_cover">
                    <img src="./assets/img/tatoo_cover.png" alt="tatoo cover">
                </section>
            </div>
        </div>

        <!-- ABOUT -->
        <div class="container_about container_card-primary" id="about">
            <div class="about card_primary">
                <div class="text_about text_card-primary">
                    <p>ABOUT US</p>
                    <h1>Know more about who we are</h1>
                </div>
                <div class="container_about container_box-cardPrimary">
                    <div class="card_about box_card-primary">
                        <h2>Beatiful Skull</h2>
                        <img src="./assets/img/about_tatoo1.png" alt="Beatiful Skull">
                        <p>Bandral Saavedra</p>
                    </div>
                    <div class="card_about box_card-primary">
                        <h2>Young Parvati</h2>
                        <img src="./assets/img/about_tatoo2.png" alt="tatto card one">
                        <p>Aaron Ilizarbe</p>
                    </div>
                    <div class="card_about box_card-primary">
                        <h2>Pray Hands</h2>
                        <img src="./assets/img/about_tatoo3.png" alt="tatto card one">
                        <p>Mileva Moriç</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container_about2 div_offset" id="products">
            <div class="about2">
                <div class="text_about">
                    <h1>The most innovator team</h1>
                    <p>We are the better tatoo maker team. We show you the most beautiful part of tyou</p>
                    <a href="#" class="btn_text-about btn_text">Know more</a>
                </div>
                <div class="image_about">
                    <img src="./assets/img/reloj.png" alt="reloj">
                    <img src="./assets/img/people.png" alt="people">
                </div>
            </div>
        </div>

        <div>
            <?php if($status == "danger"): ?>
                <div class="alert danger">
                    <span>A problem arose!</span>
                </div>
            <?php endif; ?>
            <?php if($status == "success"): ?>
                <div class="alert success">
                    <span>Message sent succesfully!</span>
                </div>
            <?php endif; ?>
        </div>


        <!-- CONTACT US -->
        <section id="contact">
            <form action="./" method="post">
                <h1>Contact Us!</h1>
                <div class="input-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="input-group">
                    <label for="subject">Subject:</label>
                    <input type="text" name="subject" id="subject">
                </div>
                <div class="input-group">
                    <label for="message">Message:</label>
                    <textarea name="message" id="message"></textarea>
                </div>

                <div class="button-container">
                    <button name="form" type="submit">Send</button>
                </div>

                <div class="contact-info">
                    <div class="info">
                        <span><i class="fas fa-map-marker-alt"></i>Jr. The crazy moment.</span>
                    </div>
                    <div class="info">
                        <span><i class="fas fa-phone"></i>+51 999 888 777</span>
                    </div>
                </div>

            </form>
        </section>

    </main>

    <footer></footer>

    <script src="https://kit.fontawesome.com/7c9c24e192.js" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>