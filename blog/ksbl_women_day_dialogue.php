<!DOCTYPE html>
<html lang="en">
<!-- <title>KSBL | News & Events</title> -->
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
                <h1>News & EVENTS . 2021</h1>
                <div class="page-detail">Stay up to date with the latest happenings at KSBL</div>
                <!---
					
					<div class="tabs">
							<a href="#" class="tab active" data-tab="2020">2020</a>
							<a href="#" class="tab" data-tab="2019">2019</a>
							<a href="#" class="tab" data-tab="2018">2018</a>
							<a href="#" class="tab" data-tab="archive">Archive</a>
							
						</div>

					--->
                <a href="category/news-and-updates/" class="back-link" title="All News">All News & Events</a>
                <div class="center-page-content news-and-events container-boxes">
                    <div class="blog-header">
                        <img src="images/blog/ksbl_women_day_dialogue2.jpg" alt="Blog other">
                        <div class="blog-name">
                            <div class="tag">EVENTS</div>
                            <h2>Women's Day Dialogue at KSBL</h2>
                            <div class="post-date">Wednesday, March 10th, 2021</div>
                        </div>
                    </div>
                    <div class="blog-detail">
                        <p>KSBL celebrated International Women's Day to recognize the achievements of women in the workplace and how they challenge themselves every day.</p>
                        <p>An interactive discussion took place amongst all employees on the significance of women's role in making this world a better place for all and the importance of empathy for both genders.</p>
                    </div>
                    <!-----------------------------------------------------------------#
							#                       Other Pictures                             #
							#----------------------------------------------------------------->
                    <div class="other-pictures">
                        <div class="blog-image-section image">
                            <div class="campus-image">
                                <img src="images/blog/ksbl_women_day_dialogue.jpg" alt="Data Science">
                            </div>
                        </div>
                        <div class="blog-image-section image">
                            <div class="campus-image">
                                <img src="images/blog/ksbl_women_day_dialogue3.jpg" alt="Blog other">
                            </div>
                        </div>
                        <div class="blog-image-section image">
                            <div class="campus-image">
                                <img src="images/blog/ksbl_women_day_dialogue4.jpg" alt="Blog other">
                            </div>
                        </div>
                    </div>
                    <!-----------------------------------------------------------------#
							#                      END  Other Pictures                         #
							#----------------------------------------------------------------->
                </div>
                <a href="category/news-and-updates/" class="back-link" title="Back to News">Back to News & Events</a>
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