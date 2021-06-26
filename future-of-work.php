<!DOCTYPE html>
<html>
<!-- <title> Future of Work - Karachi School of Business & Leadership </title> 
<title> Future of Work - Karachi School of Business & Leadership </title>
    <meta name="description" content=" A futuristic business school that foresees and attends to industry demand and needs">
    <meta name="keywords" content="future of work, industry 4.0, business education, value system, business school, management sciences">-->
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

<body class="mba why-ksbl-page1 future-work">
    <!-----------------------------------------------------------------#
	#                       Header START                               #
	#----------------------------------------------------------------->
    <header id="header" class="run">
        <div class="header-video">
            <video id="myvideo" width="1000" height="400" autoplay loop muted playsinline>
                <source class="active" src="images/hobnob_lowres.mov" data-mobile="images/hobnob_lowres.mov" data-desktop="images/hobnob_highres.mov" type="video/mp4">
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
                    <h1>FUTURE OF WORK</h1>
                    <h2>Rectifying education in the wake of a paradigm shift for the<br>workforce, workplace and management</h2>
                </div><!-- container -->
            </div>
        </div><!-- container -->
        </div><!-- Header-bottom -->
    </header>
    <!-----------------------------------------------------------------#
	#                       Header END                                 #
	#----------------------------------------------------------------->
    <!-----------------------------------------------------------------#
	#                 Workforce Shift Start                        #
	#----------------------------------------------------------------->
    <div class="why-ksbl-section workforce-shift">
        <div class="container">
            <div class="left-side">
                <img src="images/workforce-shift.png" alt="Workforce Shift" />
            </div>
            <div class="right-side">
                <h2><span class="orange-text">New Age Economy</span> . The only way to ensure readiness for tomorrow is to prepare today</h2>
                <div class="detail">
                    <p>On the crossroads of technological innovation and organizational change, rests the need to upgrade minds who are to make business decisions in the era of the 4th industrial revolution. Dynamics of the workforce shift as automation, increased data dependency, fintech, artificial intelligence & robotics take the reins. The 4th Industrial Revolution is set to disrupt and transform operations, how machines and people interact and increased dependency on information technology. The digital economy calls for continual learning and unlearning for which a workforce stands to be prepared.</p>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------------------------------------------#
	#                 Immersive Learning END                           #
	#----------------------------------------------------------------->
    <!-----------------------------------------------------------------#
	#                   Prioritizing Technology Start                  #
	#----------------------------------------------------------------->
    <div class="why-ksbl-section prioritizing-technology">
        <div class="container">
            <div class="left-side">
                <span class="orange-text">Prioritizing Technology</span> <br>
                as a cross-cutting approach to develop skills
            </div>
            <div class="middle-side">
                <img src="images/prioritizing-technilogy.png" alt="Prioritizing Technology" />
            </div>
            <div class="right-side">
                Focus on enhancing
                <span class="orange-text"><br>inclusion and diversity</span>
            </div>
        </div>
    </div>
    <!-----------------------------------------------------------------#
	#              Prioritizing Technology END                        #
	#----------------------------------------------------------------->
    <!-----------------------------------------------------------------#
	#                  Programs designed Start                        #
	#----------------------------------------------------------------->
    <div class="why-ksbl-section programs-designed">
        <div class="container">
            <div class="left-side">
                <img src="images/programs-designed.png" alt="Programs designed" />
            </div>
            <div class="right-side">
                <h2>Programs designed with guided insights for a better action-oriented approach</h2>
                <div class="detail">
                    <p>At KSBL, we aim to combat the upcoming challenges posed by evolving work standards through a cutting-edge curriculum and upskilled professionals. Our academicians and adjuncts revise and update program guides in relevance to industry feedback and curated insight. For KSBL, coping with the digital economy & technological upgrade is all about developing leaders who are competent, inclusive and diverse.
                    </p>
                </div>
                <div class="bootom-buttons">
                    <a href="mba/index.php" title="View Programs" class="btn black-border">View Programs</a>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------------------------------------------#
	#                    Programs designed END                         #
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