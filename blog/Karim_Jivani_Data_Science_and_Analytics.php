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
                <a href="index.php" title="KSBL" class="logo">
                    <img src="images/ksbl-logo-high.png" width="239" alt="KSBL" />
                </a>
            </div>
            <div class="open-house-content single-blog">
                <h1>News & EVENTS . 2021</h1>
                <div class="page-detail">Stay up to date with the latest happenings at KSBL</div>

                <a href="blog/category/news-and-updates/" class="back-link" title="All News">All News & Events</a>
                <div class="center-page-content news-and-events container-boxes">
                    <div class="blog-header">
                        <img src="images/blog/Karim_Jivani_Data_Science.webp" alt="Blog other">
                        <div class="blog-name">
                            <div class="tag">Events</div>
                            <h2>Karim Jivani Conducts Session on Data Deployments in Pakistan</h2>
                            <div class="post-date">Wednesday, November, 24th, 2021</div>
                            
                        </div>
                    </div>
                    <div class="blog-detail">
                        <p>
                        Karim Jivani, Data Science and Analytics practitioner, conducted a session with our MS Business Analytics. The topic of his session was Intensive Data Deployments in Pakistan. Demonstrating his exceptional knowledge of the subject area, he discussed the use of data pipelines and how they should be structured around driving business decisions.
                        </p>
                      
                    </div>
                    <!-----------------------------------------------------------------#
							#                       Other Pictures                             #
							#----------------------------------------------------------------->
                    <div class="other-pictures">
                        <div class="blog-image-section image">
                            <div class="campus-image">
                                <img src="images/blog/Karim_Jivani_Data_Science2.webp" alt="Data Science">
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