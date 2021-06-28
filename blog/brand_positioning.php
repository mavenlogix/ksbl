<!DOCTYPE html>
<html lang="en">

<?php 
$page_meta_key = 'News-and-Events';
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
                <a href="index.html" title="KSBL" class="logo">
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
                        <img src="images/blog/brandPositioning.png" alt="Data Science">
                        <div class="blog-name">
                            <div class="tag">EVENTS</div>
                            <h2>A talk on 'Brand Positioning' by Graham Robertson</h2>
                            <div class="post-date">Friday, December 18th, 2020</div>
                        </div>
                    </div>
                    <div class="blog-detail">
                        <p>Graham Robertson was recently invited as a guest speaker to talk about brand positioning with the students of Marketing Management (MBA & Executive MBA) and Brand Management (Executive MBA).</p>
                        <p>Mr. Graham shared his knowledge and explained the difference between good and bad brand positioning and imparted advice on how to successfully position your brand in the market.</p>
                        <p>Graham Robertson, is a best-selling author, brand advisor, & marketing consultant Mr. Graham has led and advised brands like General Mills, Pfizer, and Johnson & Johnson, NFL Players Association, Shell, Reebok & The Mayo Clinic.</p>
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