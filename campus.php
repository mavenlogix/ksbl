<!DOCTYPE html>
<html lang="en">

<?php 
$page_meta_key = 'campus';
include('./partials/head.php');

?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55371745-1"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() { dataLayer.push(arguments); }
gtag('js', new Date());

gtag('config', 'UA-55371745-1');
</script>

<body class="mba open-house center-page category-page campus-facility">
    <!-----------------------------------------------------------------#
	#                       Header START                               #
	#----------------------------------------------------------------->
    <header id="header" class="run">
        <div class="container">
            <?php
include('./partials/navbar.php'); 
?>
            <div class="header-content">
                <a href="index.php" title="KSBL" class="logo">
                    <img src="images/ksbl-logo-high.png" width="239" alt="KSBL" />
                </a>
            </div>
            <div class="open-house-content single-blog">
                <h1>KSBL CAMPUS <img src="images/white-coloured-bird.png" alt="KSBL" /></h1>
                <!-----------------------------------------------------------------#
	#                    Engage with KSBL Start                        #
	#----------------------------------------------------------------->
                <div class="why-ksbl-section">
                    <div class="left-side">
                        <h2>A Purpose-built Campus</h2>
                        <div class="detail">
                            <p>A purpose-built city campus building of KSBL is located at Stadium Road, Karachi, Pakistan, on a prestigious 3 acre site owned by The Dawood Foundation. The Dawood Foundation-KSBL City Campus is designed to accommodate up to 325 students. It comprises of horse-shoe style lecture theatres to facilitate the case study teaching method, seminar rooms, breakout rooms, meeting rooms, cafeteria, a library and a fully equipped auditorium. The campus has been fitted with the latest technology to allow real-time distance teaching.</p>
                        </div>
                    </div>
                    <div class="right-side">
                        <h2>The Architect</h2>
                        <div class="detail">
                            <p>The design concept for the campus building has been developed by William McDonough + Partners (WM+P), a U.S.-based architectural firm. Founder William McDonough is a winner of three presidential awards and has been cited in Time magazine as "changing the design of the world". WM+P has designed projects such as the NASA Sustainability Base in California and the American University School of International Service in Washington DC, USA. </p>
                        </div>
                    </div>
                </div>
                <!-----------------------------------------------------------------#
	#                   Engage with KSBL END                           #
	#----------------------------------------------------------------->
                <div class="center-page-content container-boxes">
                    <div class="campus-image-section image">
                        <div class="campus-image">
                            <img src="images/campus/Campus-Main.jpg" alt="Campus Main Entrance" />
                            <div class="category-name">Campus Main Entrance</div>
                        </div>
                    </div>
                    <div class="campus-image-section image">
                        <div class="campus-image">
                            <img src="images/campus/Central-Courtyard-and-IRC 2.jpg" alt="Central Courtyard" />
                            <div class="category-name">Central Courtyard</div>
                        </div>
                    </div>
                    <div class="campus-image-section image">
                        <div class="campus-image">
                            <img src="images/campus/Enterance-Lobby.jpg" alt="Entrance Lobby" />
                            <div class="category-name">Entrance Lobby</div>
                        </div>
                    </div>
                    <div class="campus-image-section image">
                        <div class="campus-image">
                            <img src="images/campus/Computer-Lab.jpg" alt="Computer Lab" />
                            <div class="category-name">Computer Lab</div>
                        </div>
                    </div>
                    <div class="campus-image-section image">
                        <div class="campus-image">
                            <img src="images/campus/Auditorium.jpg" alt="Auditorium" />
                            <div class="category-name">Auditorium</div>
                        </div>
                    </div>
                    <div class="campus-image-section image">
                        <div class="campus-image">
                            <img src="images/campus/Board-Room.jpg" alt="Board Room" />
                            <div class="category-name">Board Room</div>
                        </div>
                    </div>
                    <div class="campus-image-section image">
                        <div class="campus-image">
                            <img src="images/campus/ELA-Cafe.jpg" alt="ELA Cafe" />
                            <div class="category-name">ELA Cafe</div>
                        </div>
                    </div>
                    <div class="campus-image-section image">
                        <div class="campus-image">
                            <img src="images/campus/Library.jpg" alt="Library" />
                            <div class="category-name">Library</div>
                        </div>
                    </div>
                    <div class="campus-image-section image">
                        <div class="campus-image">
                            <img src="images/campus/Seminar-Room.jpg" alt="Seminar Room" />
                            <div class="category-name">Seminar Room</div>
                        </div>
                    </div>
                    <div class="campus-image-section image">
                        <div class="campus-image">
                            <img src="images/campus/ELA-Training-Hall.jpg" alt="ELA Training Hall" />
                            <div class="category-name">ELA Training Hall</div>
                        </div>
                    </div>
                    <div class="campus-image-section image">
                        <div class="campus-image">
                            <img src="images/campus/Lecture-Hall.jpg" alt="Lecture Hall" />
                            <div class="category-name">Lecture Hall</div>
                        </div>
                    </div>
                    <div class="campus-image-section image">
                        <div class="campus-image">
                            <img src="images/campus/Basement.jpg" alt="Basement Car Park" />
                            <div class="category-name">Basement Car Park</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- container -->
    </header>
    <!-----------------------------------------------------------------#
	#                       Header END                                 #
	#----------------------------------------------------------------->
    <?php
include('./partials/footer.php');
?>

<!-- footer end -->
<?php
include('./partials/footer-scripts.php');
?>

</body>

</html>