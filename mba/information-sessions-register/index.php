<!DOCTYPE html>
<html>
<!-- <title>KSBL | Register, Open House</title> -->
<?php 

include('../../partials/head.php');

?>

<body class="mba open-house register-page">
    <!-----------------------------------------------------------------#
	#                       Header START                               #
	#----------------------------------------------------------------->
    <header id="header" class="run">
        <div class="container">
            <?php
include('../../partials/navbar.php'); 
?>

            <div class="header-content">
                <a href="../../index.html" title="KSBL" class="logo">
                    <img src="../../images/ksbl-logo-high.png" width="239" alt="KSBL" />
                </a>
            </div>
            <div class="open-house-content">
                <h1><span class="blue-text">REGISTER</span> Open House</h1>
                <div class="page-detail">Register now for our Open House here. We look forward to meeting you!</div><br>
                <div class="open-house-tabs">
                    <!-- === Tab 1 === -->
                    <div class="tab-section active">
                        <div class="tag-area"><a href="../information-sessions/" class="back-link" title="Back to All Sessions">All Sessions</a><span class="tag orange">REGISTER</div>
                        <div class="program-details">
                            <div class="about-program">
                                <h2>Open House</h2>
                                <div class="program-date">Date & Time - To be Announced</div>
                                <div class="program-at">You may register your interest in our upcoming Open Houses</div>
                            </div>
                        </div>
                        <div class="highlights-content">
                            <h3>Highlights of the Session</h3>
                            Holistic Overview of Program
                            <br>KMAT Details & Registration Process
                            <br>Guidance from Admission Panel regarding Admission Process
                            <br>Merit-based / Need-based Scholarship
                        </div>
                        <div class="register-form">
                            <h2>Register</h2>
                            <div class="form-section">
                                <form action="#">
                                    <div class="form-wrapper">
                                        <div class="form-content">
                                            <select name="" required class="required">
                                                <option value="mba">MBA</option>
                                                <option value="e-mba">EMBA</option>
                                                <option value="ees">MS Business Analytics</option>
                                                <option value="ela">Executive Education</option>
                                            </select>
                                            <span class="required-star">*</span>
                                        </div>
                                    </div>
                                    <div class="form-wrapper">
                                        <div class="form-content">
                                            <input type="text" name="first-name" placeholder="First Name" required class="required" />
                                            <span class="required-star">*</span>
                                        </div>
                                        <div class="form-content">
                                            <input type="text" name="last-name" placeholder="Last Name" required class="required" />
                                            <span class="required-star">*</span>
                                        </div>
                                    </div>
                                    <div class="form-wrapper">
                                        <div class="form-content">
                                            <input type="email" name="email" placeholder="Email Address" required class="required" />
                                            <span class="required-star">*</span>
                                        </div>
                                        <div class="form-content">
                                            <input type="text" name="context-number" placeholder="Contact Number" required class="required" />
                                            <span class="required-star">*</span>
                                        </div>
                                    </div>
                                    <div class="form-wrapper">
                                        <div class="form-content">
                                            <input type="text" name="email" placeholder="Organisation/University" required class="required" />
                                            <span class="required-star">*</span>
                                        </div>
                                    </div>
                                    <div class="privacy-security form-wrapper">
                                        <div class="form-content inline-content">
                                            <input name="accept" type="checkbox" value="1" />
                                            <span class="checkmark"></span>
                                        </div>
                                        <div class="form-content">
                                            I agree to receive electronic communication(s) from KSBL regarding seminars, Program information, conferences, admissions updates, and other events of interest.
                                        </div>
                                    </div>
                                    <div class="form-submit">
                                        <input type="submit" class="btn-blue" name="submit" value="Submit" />
                                    </div>
                                </form>
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
include('../../partials/footer.php');
?>

<!-- footer end -->
<?php
include('../../partials/footer-scripts.php');
?>

</body>

</html>