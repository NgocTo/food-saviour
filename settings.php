<?php
session_start();
$style = "css/main.css";
include_once 'shared/head.php';
include_once 'shared/sidebar.php';
if ($_SESSION['logged-in'] === true) {
    $userId = $_SESSION['id'];
?>
<div id="main-container">
<?php
include_once 'shared/header.php'
?>

<main class="text-dark">
    <h1 class="text-green settings-padding">About Us</h1>
    <div class="about-container">
        <section class="about">
            <h2 class="text-green">Breakfast Club</h2>
            <p>The Breakfast Club was a group created in the Fall of 2018 to build a web app for one of our classes in the Sheridan Interactive Media Management program. As a group of young adults we knew all too well that it is easy to forget what food you have, and then you end up buying too much or it goes bad on you. On average, a Canadian household will waste almost $1500 a year on food. From this came the idea for Food Saviour!</p>
            <p>To help Canadians cut down on food waste we developed an easy-to-use website to help track the purchasing, consumption, and expiry dates of their food. This will help to cut down on food waste and save food from going bad, which will help the environment as well as save users money. With the “Food Saved” and “Food Lost” sections they can see how well they are doing at staying on top of expiry dates. As we continue to build out the application we would like to add a feature that notifies a user not to buy an item if they tend to never use it before the expiration.</p>
        </section>
        <section class="contact">
            <h2 class="text-green">Contact Us</h2>
            <p>1430 Trafalgar Road</p>
            <p>Oakville, Ontario</p>
            <p>Canada</p>
            <a href="mailto:info@breakfastclub.com">info@breakfastclub.com</a>
        </section>
    </div>
    <h1 class="text-green settings-padding">Members</h1>
    <div class="member-container">
        <section class="member">
            <img src="img/katie-carson.jpg" alt="Katie Carson Photo" class="img-responsive">
            <h2 class="text-green">Katie Carson</h2>
            <p>I am a marketer with a BA in English, Psychology, and Digital Art Communication. My background is in digital marketing, web content development, and graphic design. I am passionate about design and layout, and creating balanced but also engaging and functional web solutions. A website should stand out, but for the right reasons.</p>
        </section>
        <section class="member">
            <img src="img/wren-chen.jpg" alt="Wren Chen Photo" class="img-responsive">
            <h2 class="text-green">Wren Chen</h2>
            <p>I am a UX designer with a BA in English and Art and Art History with experience in photography, graphic design, and content creation. I have a strong passion for environmental issues including waste reduction, environmental protection, and nature conservation.</p>
        </section>
        <section class="member">
            <img src="img/elena-race.jpg" alt="Elena Race Photo" class="img-responsive">
            <h2 class="text-green">Elena Race</h2>
            <p>I am very keen about technology and the arts, and the intersection of technology with society. I have a BFA in New Media, a multidisciplinary degree with a digital focus. I enjoy following technology news, including critically examining how technology impacts society.</p>
        </section>
        <section class="member">
            <img src="img/ngoc-to.jpg" alt="Ngoc To Photo" class="img-responsive">
            <h2 class="text-green">Ngoc To</h2>
            <p>I am a Web Developer who has a background in art and a strong passion for design. I love to create friendly designs with unique layouts that are practical. I am also eager to explore new solutions to existing problems. As front-end, I ensure that the websites I make provide the best experience possible to the users.</p>
        </section>
    </div>
</main>

</div>
<?php
include_once 'shared/footer.php';
} else {
	header("Location: welcome.php");
}
?>
