<!DOCTYPE html>
<html>

<?php 
$page_meta_key = 'contact-us';
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
                <h1>Contact Us</h1>
                <div class="page-detail">Office Hours: 9:00 am - 5:00 pm, Monday through Friday</div>
                <div class="open-house-tabs">
                    <!-- === Tab 1 === -->
                    <div class="tab-section active">
                        <div class="content-section">
                            <div class="address-area">
                                <h2>General Enquiries</h2>
                                <div class="complete-address">
                                    <b>UAN:</b> +92 (21) 111 11 KSBL (5725)<br />
                                    <b>Tel:</b> +92 (21) 38771999
                                </div>
                            </div>
                            <div class="address-area">
                                <h2>Postal Address</h2>
                                <div class="complete-address">
                                    <b class="location"><a href="https://www.google.com/maps/place/Karachi+School+of+Business+%26+Leadership/@24.8897375,67.069599,18.02z/data=!4m5!3m4!1s0x3eb33ddfd5bc0fa3:0xc3b3075fe325288b!8m2!3d24.8893465!4d67.0700634" target="_blank">Karachi School of Business & Leadership</a></b><br />
                                    National Stadium Road<br />
                                    Opp. Liaquat National Hospital,<br />
                                    Karachi - 74800, Pakistan
                                </div>
                            </div>
                            <div class="address-area">
                                <h2>Admissions Department</h2>
                                <div class="complete-address">
                                    <b>UAN:</b> +92 (21) 111 11 KSBL (5725)<br />
                                    <b>Tel:</b> +92 (21) 38771999 . Ext: 172, 174 & 175<br />
                                    <b>Email:</b> <a href="mailto:admissions@ksbl.edu.pk">admissions@ksbl.edu.pk</a>
                                </div>
                            </div>
                            <div class="address-area">
                                <h2>Executive Education</h2>
                                <div class="complete-address">
                                    <b>UAN:</b> +92 (21) 111 11 KSBL (5725)<br />
                                    <b>Tel:</b> +92 (21) 38771999<br />
                                    <b>Email:</b> <a href="mailto:execed@ksbl.edu.pk">execed@ksbl.edu.pk</a>
                                </div>
                            </div>
                            <div class="address-area">
                                <h2>Partnering with KSBL</h2>
                                <div class="complete-address">
                                    <b>Email:</b> <a href="mailto:rd@ksbl.edu.pk">rd@ksbl.edu.pk</a>
                                </div>
                            </div>
                            <div class="address-area">
                                <h2>Human Resources</h2>
                                <div class="complete-address">
                                    <b>Email:</b> <a href="mailto:hr@ksbl.edu.pk">hr@ksbl.edu.pk</a> 
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