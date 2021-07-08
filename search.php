<!DOCTYPE html>
<html>

<?php 

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

<body class="mba open-house student-achievement contact-us">
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
            <div class="open-house-content">
                <h1>SEARCH RESULTS</h1>
                <div class="page-detail">We found 11 results matching your search on XYZ subject</div>
                <div class="open-house-tabs">
                    <!-- === Tab 1 === -->
                    <div class="tab-section active">
                        <div class="content-section-search">
                            <div class="address-area">
                                <h2>General Enquiries</h2>
                                <div class="complete-address">
                                    <p>KSBL Curriculum . Core Competencies</p>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <!-- === END Tab 1 === -->
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