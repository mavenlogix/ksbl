<!DOCTYPE html>
<html lang="en">

<?php 
$page_meta_key = 'student-placement';
include('./partials/head.php');

?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-55371745-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-55371745-1');
</script>

<body class="mba student-placement">
    <!-----------------------------------------------------------------#
	#                       Header START                               #
	#----------------------------------------------------------------->
    <header id="header" class="run">
        <div class="header-video">
            <video id="myvideo" class="fixed" width="1000" height="400" autoplay loop muted playsinline>
                <source class="active" src="images/studentplacement_highres.mp4" data-mobile="images/studentplacement_lowres.mp4" data-desktop="images/studentplacement_highres.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="container">
            <?php
include('./partials/navbar.php'); 
?>
            <div class="header-content">
                <a href="index.php" title="KSBL" class="logo">
                    <img src="images/ksbl-logo-high.png" width="239" alt="KSBL" />
                </a>
                <div class="heder-info">
                    <h1>Student Placements</h1>
                    <div class="detail">
                        <span class="orange-yellow-text">The student placement and internships office actively engages and reaches out to the industry to work on arranging on-campus recruitment initiatives, interviews and placement in various corporates and organizations for open vacancies.</span>
                    </div>
                    </h2>
                </div><!-- container -->
            </div>
        </div><!-- container -->
        </div><!-- Header-bottom -->
    </header>
    <!-----------------------------------------------------------------#
	#                       Header END                                 #
	#----------------------------------------------------------------->
    <!-----------------------------------------------------------------#
	#                    Engage with KSBL Start                        #
	#----------------------------------------------------------------->
    <div class="why-ksbl-section immersive-learning engage-ksbl">
        <div class="container">
            <div class="left-side">
                <img src="images/engage-ksbl-alumni.jpg" alt="Engage with KSBL Alumni and harness its poten" />
            </div>
            <div class="right-side">
                <h2>Our Alumni </h2>
                <div class="detail">
                    <p>Our graduates have proven their mettle and worth by serving prestigious organizations across Pakistan and abroad. We have equipped our graduates not only with dynamic & latest business principles delivered by highly effective faculty and renowned adjuncts but have empowered them in ethical decision-making, knowledge and humanity as well, to balance strategic brilliance with intellectual sensitivity. Our graduates deliver the immediate impact demanded through a well-rounded executive role-play backed by a progressive business education while making their way to the top.
                    </p>
                </div>
                <div class="bootom-buttons">
                    <a href="alumni/success-stories.php" title="Placeholder" class="btn grey-btn">Alumni</a>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------------------------------------------#
	#                   Engage with KSBL END                           #
	#----------------------------------------------------------------->
    <!-----------------------------------------------------------------#
	#                             Leaders Start                        #
	#----------------------------------------------------------------->
    <div class="why-ksbl-section leaders stud-leaders">
        <div class="container">
            <div class="right-side">
                <h2><span class="orange-yellow-text">Our Role</span></h2>
                <div class="detail">
                    <p><b>To provide our graduates with the right opportunities, our Student Placement Office works round the clock to help them craft their career strategies to be thoroughly prepared via a solid foundation and hence ace the initial recruitment stages of their dream company. <br><br>Through one-on-one sessions with career advisors & mentors, intense work around mastering the leadership skills and networking opportunities with global recruiters and industry experts our graduates know what it takes to excel.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------------------------------------------#
	#                          Leaders END                             #
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