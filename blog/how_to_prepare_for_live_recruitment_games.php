<!DOCTYPE html>
<html lang="en">
<?php 

include('../partials/head.php');

?>

<body class="mba open-house center-page category-page">
    <!-----------------------------------------------------------------#
	#                       Header START                               #
	#----------------------------------------------------------------->
    <header id="header" class="run">
        <div class="container">
            <?php
include('../partials/navbar.php'); 
?>
            <div class="header-content">
                <a href="index.php" title="KSBL" class="logo">
                    <img src="images/ksbl-logo-high.png" width="239" alt="KSBL" />
                </a>
            </div>
            <div class="open-house-content single-blog">
                <h1>News & EVENTS . 2020</h1>
                <div class="page-detail">Stay up to date with the latest happenings at KSBL</div>
                <!---
					
					<div class="tabs">
							<a href="#" class="tab active" data-tab="2020">2020</a>
							<a href="#" class="tab" data-tab="2019">2019</a>
							<a href="#" class="tab" data-tab="2018">2018</a>
							<a href="#" class="tab" data-tab="archive">Archive</a>
							
						</div>

					--->
                <a href="blogs/category/news-and-updates/" class="back-link" title="All News">All News & Events</a>
                <div class="center-page-content news-and-events container-boxes">
                    <div class="blog-header">
                        <img src="images/blog/live_recruitment_games.jpg" alt="Data Science">
                        <div class="blog-name">
                            <div class="tag">EVENTS</div>
                            <h2>"How to prepare for Live Recruitment Games" by Kamran Kiyani</h2>
                            <div class="post-date">Saturday, February 20th, 2021</div>
                        </div>
                    </div>
                    <div class="blog-detail">
                        <p>At KSBL, we also prepare students for the latest in recruitment practices that are evolving with technology. Since recruitment gaming is a tool that is now popular with many big organizations, a special session was conducted for KSBL students by Mr. Kamran Kiyani on preparatory strategies for live recruitment games.</p>
                        <p>In the session he shared valuable insights on how it plays a pivotal role in the entire recruitment process along with valuable tips and tricks for students who were new to it.</p>
                    </div>
                    <!-----------------------------------------------------------------#
							#                       Other Pictures                             #
							#----------------------------------------------------------------->
                    <div class="other-pictures">
                        <!--<div class="blog-image-section image">-->
                        <!--	<div class="campus-image">-->
                        <!--		<img src="images/blog/alumni-reunion-1.jpg" alt="Blog other"/>-->
                        <!--	</div>-->
                        <!--</div>-->
                    </div>
                    <!-----------------------------------------------------------------#
							#                      END  Other Pictures                         #
							#----------------------------------------------------------------->
                </div>
                <a href="blogs/category/news-and-updates/" class="back-link" title="Back to News">Back to News & Events</a>
            </div>
        </div><!-- container -->
    </header>
    <!-----------------------------------------------------------------#
	#                       Header END                                 #
	#----------------------------------------------------------------->
  <?php
include('../partials/footer.php');
?>

<!-- footer end -->
<?php
include('../partials/footer-scripts.php');
?>
    <script async defer src="https://cse.google.com/cse.js?cx=5a67611eb2aef8e92"></script>
</body>

</html>