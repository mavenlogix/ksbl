<!DOCTYPE html>
<html lang="en">
<!--     <title> Success Stories - Karachi School of Business and Leadership </title> -->
<?php 

include('./partials/head.php');

?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55371745-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-55371745-1');
</script>

<body class="mba why-ksbl-page full-height">
    <!-----------------------------------------------------------------#
    #                       Header START                               #
    #----------------------------------------------------------------->
    <header id="header" class="run">
        <!--div class="header-video">
            <img src="images/whyksbl_header.jpg" alt="Why KSBL"/>
            </div-->
        <div class="container">
            <?php
include('./partials/navbar.php'); 
?>
            <div class="header-content">
                <a href="index.html" title="KSBL" class="logo">
                    <img src="images/ksbl-logo-high.png" width="239" alt="KSBL" />
                </a>
                <div class="heder-info">
                    <h1>WHY KSBL?</h1>
                    <h2>A growth led learning system that combines value-driven leadership and top-grade business skills</h2>
                </div><!-- container -->
            </div>
        </div><!-- container -->
        </div><!-- Header-bottom -->
    </header>
    <!-----------------------------------------------------------------#
    #                       Header END                                 #
    #----------------------------------------------------------------->
    <!-----------------------------------------------------------------#
    #                  Immersive Learning Start                        #
    #----------------------------------------------------------------->
    <div class="why-ksbl-section immersive-learning">
        <div class="container">
            <div class="left-side">
                <img src="images/immersive-learning.jpg" alt="Immersive Learning" />
            </div>
            <div class="right-side">
                <h2>Learning Continues, Beyond the Classroom</h2>
                <div class="detail">
                    <p>Our educational philosophy emphasizes on developing systematic thinking, continual curiosity to improve and industry dynamism by bringing in subject-matter experts who challenge students to experience real problems beyond the trajectories of theory. At KSBL, this happens in a premeditated framework which ensures that ethical behaviour and character development also do not go amiss. Our curriculum is complemented by a value-driven and industry-based approach to foster ethical decision-making and knowledge & humility.</p>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------------------------------------------#
    #                 Immersive Learning END                           #
    #----------------------------------------------------------------->
    <!-----------------------------------------------------------------#
    #                             Leaders Start                        #
    #----------------------------------------------------------------->
    <div class="why-ksbl-section leaders">
        <div class="leaders-video">
            <video id="myvideo" width="1000" height="400" autoplay loop muted playsinline>
                <source class="active" src="images/whyksbl_people.mp4" data-mobile="images/whyksbl_people.mp4" data-desktop="images/whyksbl_people.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="container">
            <div class="left-side">
            </div>
            <div class="right-side">
                <h2>Diaspora of Business Professionals & Industry Leaders</h2>
                <div class="detail">
                    <p><b>KSBL prepares individuals in a well-rounded business ecosystem pushing for futuristic preparedness led by present-day technology, experiential learning, simulation and guided evaluation. Bearing active alumni, KSBL acts as an enabling medium for individuals to interact, share ideas and be inspired.
                            <br><br>Through a strong alumni network, event series, super supportive framework and one-on-one interactions with professionals and industry experts, we press for a wholesome readiness along with academics.
                            We take pride in helping develop some of the most notable leaders who have made meaningful contributions to society.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------------------------------------------#
    #                          Leaders END                             #
    #----------------------------------------------------------------->
    <!-----------------------------------------------------------------#
    #                   Research Learning Start                        #
    #----------------------------------------------------------------->
    <div class="why-ksbl-section research-learning">
        <div class="container">
            <div class="left-side">
                <img src="images/research-based-learning.jpg" alt="Research based Learning" />
            </div>
            <div class="right-side">
                <h2>Pedagogy: Learning that is Research-Based & Growth-Led
                </h2>
                <div class="detail">
                    <p><b>Our pedagogical framework rests on taking onboard academic professionals and business experts with a real-world approach to design & deliver the curriculum in conjunction with industrial demands. While developing a leadership hub at KSBL, we wish to equip individuals with both the right character and the perfect capabilities to make a mark in the business world.</p>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------------------------------------------#
    #                    Research Learning END                         #
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