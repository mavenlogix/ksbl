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
                <a href="blog/category/news-and-updates/" class="back-link" title="All News">All News & Events</a>
                <div class="center-page-content news-and-events container-boxes">
                    <div class="blog-header">
                        <img src="images/blog/market_segmentation_2.png" alt="Signs an MoU" />
                        <div class="blog-name">
                            <div class="tag">EVENTS</div>
                            <h2>A guest speaker session on 'Market Segmentation' by Dr. Marco Vriens</h2>
                            <div class="post-date">Friday, December 18th, 2020</div>
                        </div>
                    </div>
                    <div class="blog-detail">
                        <p>Dr. Marco Vriens, CEO & Founder of Kawantum Analytics, is a well renowned analytics expert, and a faculty member of University of Wisconsin - La Crosse who also has led analytical teams for Microsoft and GE Healthcare. We had the privilege of hosting Dr. Vriens as a guest speaker on the topic of 'Market Segmentation' for our MBA & EMBA students.</p>
                        <p>Dr. Vriens shared his knowledge and experience about Implementable Market Segmentation and its efficiencies. He also shared his insights on variables and using analytics for identifying segments. The session concluded with an interactive Q&A round.</p>
                    </div>
                    <!-----------------------------------------------------------------#
							#                       Other Pictures                             #
							#----------------------------------------------------------------->
                    <div class="other-pictures">
                        <div class="blog-image-section image">
                            <div class="campus-image">
                                <img src="images/blog/marketsegmentation.png" alt="Blog other" />
                            </div>
                        </div>
                    </div>
                    <!-----------------------------------------------------------------#
							#                      END  Other Pictures                         #
							#----------------------------------------------------------------->
                </div>
                <a href="blog/category/news-and-updates/" class="back-link" title="Back to News">Back to News & Events</a>
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