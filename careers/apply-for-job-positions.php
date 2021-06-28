<!DOCTYPE html>
<html>

<?php 
$page_meta_key = 'Apply-for-Job-Positions';
include('../partials/head.php');

?>

<body class="mba open-house register-page student-achievement activity-club careers job-apply">
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
            <div class="open-house-content">
                <h1>Apply For Job Positions</h1>
                <div class="page-detail">Working for the Karachi School of Business & Leadership offers you a unique opportunity to gain experience, develop skills and gain career growth. You will be part of a modern, rapidly changing organisation with national influence and impact. Our jobs offer you a scope for versatility, initiative and creativity in a stimulating and supportive environment.</div>
                <div class="open-house-tabs">
                    <a href="careers.html" class="back-link" title="Back to Jobs">Back to Jobs</a>
                    <!-- === Tab 1 === -->
                    <div class="tab-section active">
                        <div class="register-form">
                            <h2>Apply</h2>
                            <div class="form-section">
                                <form action="#">
                                    <div class="form-wrapper">
                                        <div class="form-content">
                                            <select name="" required class="required">
                                                <option value="Mr.">Mr.</option>
                                                <option value="Ms.">Ms.</option>
                                                <option value="Mrs.">Mrs.</option>
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
                                            <input type="text" name="context-number" placeholder="Contact Number" />
                                        </div>
                                    </div>
                                    <div class="form-wrapper full-width">
                                        <div class="form-content">
                                            <select name="">
                                                <option value="Select Position">Select Position</option>
                                                <option value="Intern: Social Media and Content Writer">Chief Financial Officer</option>
                                                <option value="Manager Career Services">Manager Career Services & Alumni</option>
                                                <option value="Assistant Manager">Assistant Manager Student Services</option>
                                                <option value="HR Generalist">HR Generalist</option>
                                                <option value="Admissions Executive">Admissions Executive</option>
                                                <option value="Teaching Assistant">Teaching Assistant</option>
                                                <option value="Adjunct Faculty">Adjunct Faculty</option>
                                                <option value="Assistant Professor OR Associate Professor">Assistant Professor OR Associate Professor</option>
                                                <option value="Executive Secretary">Executive Secretary</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-wrapper file-under">
                                        <div class="form-content upload-field">
                                            <input type="text" name="upload-resume" readonly class="upload-resume" placeholder="Upload Resume" />
                                        </div>
                                        <div class="form-content upload-button">
                                            <input type="file" name="upload-file" class="upload-file" />
                                            <div class="btn-file">Choose File</div>
                                        </div>
                                    </div>
                                    <div class="form-submit">
                                        <input type="submit" class="btn-blue btn-yellow-orange-white" name="submit" value="Submit" />
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
include('../partials/footer.php');
?>

<!-- footer end -->
<?php
include('../partials/footer-scripts.php');
?>
</body>

</html>